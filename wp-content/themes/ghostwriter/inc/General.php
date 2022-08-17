<?php

class General
{
    const USERNAME = 'restapiuser';
    const PASSWORD = 'O$4ak3wvZWj#mi)JS2$hBRJl';
    const REST_API = 'https://akademily.de/wp-json/wp/v2/requests';
    const REST_API_DOUBLE = 'https://akademilyclon.lyson-belarus.by/wp-json/wp/v2/requests';

    public function __construct()
    {
        // Удаляем из Wordpress ненужные элементы
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_head', 'wp_resource_hints', 2);
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        remove_action('wp_head', 'wp_oembed_add_host_js');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
        remove_action('template_redirect', 'rest_output_link_header', 11);
        remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
        remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
        remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
        remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
        remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
        remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);
        remove_action('init', 'rest_api_init');
        remove_action('rest_api_init', 'rest_api_default_filters', 10);
        remove_action('parse_request', 'rest_api_loaded');

        add_action('wp_enqueue_scripts', [$this, 'connectedStylesAndScripts']);
        add_action('do_robotstxt', [$this, 'addedRobotsTxt']);
        add_action('init', [$this, 'settingsWordpress']);

        add_filter('upload_mimes', [$this, 'svgUploadAllow']);
        add_filter('wpseo_locale', [$this, 'locale']);

        add_filter('excerpt_more', function ($more) {
            return '...';
        });

        add_action('wp_ajax_sendForm', [$this, 'mailer']);
        add_action('wp_ajax_nopriv_sendForm', [$this, 'mailer']);
    }

    public function settingsWordpress()
    {
        register_nav_menu('top-menu', 'Top menu');
        add_theme_support('post-thumbnails', ['post']);
    }

    public function locale(): string
    {
        return 'de-DE';
    }

    public function connectedStylesAndScripts()
    {
        wp_dequeue_style('wp-block-library');

        wp_enqueue_script('main', DE_URI . '/assets/main.bundle.js', [], '3.0', true);
        wp_enqueue_style('main', DE_URI . '/assets/main.bundle.css', [], '3.0');
        wp_enqueue_style('second', DE_URI . '/style.css', [], '3.0');
    }

    public function addedRobotsTxt()
    {
        $data[] = 'User-agent: *';
        $data[] = 'Disallow: /cgi-bin';
        $data[] = 'Disallow: /?';
        $data[] = 'Disallow: /wp-';
        $data[] = 'Disallow: /wp/';
        $data[] = 'Disallow: *?s=';
        $data[] = 'Disallow: *&s=';
        $data[] = 'Disallow: /search/';
        $data[] = 'Disallow: /users/';
        $data[] = 'Disallow: */trackback';
        $data[] = 'Disallow: */feed';
        $data[] = 'Disallow: */rss';
        $data[] = 'Disallow: */embed';
        $data[] = 'Disallow: */wlwmanifest.xml';
        $data[] = 'Disallow: /xmlrpc.php';
        $data[] = 'Disallow: *utm*=';
        $data[] = 'Disallow: *openstat=';
        $data[] = 'Allow: */uploads';
        $data[] = 'Allow: /*/*.js';
        $data[] = 'Allow: /*/*.css';
        $data[] = 'Allow: /wp-*.png';
        $data[] = 'Allow: /wp-*.jpg';
        $data[] = 'Allow: /wp-*.jpeg';
        $data[] = 'Allow: /wp-*.gif';
        $data[] = 'Allow: /wp-admin/admin-ajax.php';
         
        $data[] = 'Sitemap: ' . get_site_url(null, '', 'https') . '/sitemap_index.xml';

        echo implode("\r\n", $data);
        die;
    }

    public function svgUploadAllow($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    public function mailer()
    {
        if (empty($_POST)) {
            wp_send_json_error();
        }

        $score = 'Рейтинг неизвестен';
        if (!empty($_POST['recaptcha_response'])) {
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $key = '6LeF-Q4eAAAAAGYm1l3UAb9iHufltY80Ws9t6x6j';
            $recaptcha = $_POST['recaptcha_response'];

            $recaptcha = file_get_contents($url . '?secret=' . $key . '&response=' . $recaptcha);
            $recaptcha = json_decode($recaptcha);

            $score = 'Проверено на спам, рейтинг: ' . $recaptcha->score;
            if ($recaptcha->score < 0.5) {
                $score = 'Возможно спам, рейтинг: ' . $recaptcha->score;
            }
        }

        $attachments = [];
        if (!empty($_FILES['attachment'])) {
            $files = $this->refactoringFilesArray();

            foreach ($files as $file) {
                if (empty($file['name'])) {
                    continue;
                }

                require_once(ABSPATH . 'wp-admin/includes/file.php');

                $moveFile = wp_handle_upload($file, ['test_form' => false]);
                if ($moveFile && empty($moveFile['error'])) {
                    $attachments[] = $moveFile['file'];
                }
            }
        }

        $to = 'info@ug-gwc.de';
        $subject = sprintf(
            'S / %s / %s - %s',
            $this->siteUri(),
            get_bloginfo('name'),
            $this->siteFormName($_POST['form-id'])
        );
        $headers = ['From: GWrites <info@ug-gwc.de>', 'content-type: text/html'];

        $message = '';
        foreach ($_POST as $key => $value) {
            if (in_array($key, ['form-id', 'action', 'recaptcha_response'])) {
                continue;
            }

            $string = (is_array($value)) ? implode(', ', $value) : $value;
            $message .= sprintf('<p>%s : %s </p>', ucfirst($key), $string);
        }
        $message .= sprintf('<p>%s</p>', $score);

        wp_mail($to, $subject, $message, $headers, $attachments);

        $id = $this->sendDataToAkademily($subject, $message);
        $doubleId = 0;
        // $doubleId = $this->sendDataToAkademilyDouble($subject, $message);

        $this->sendDataToBase($_POST, $subject);
        $this->sendDataToTelegram($id, $doubleId, $subject, $score);

        wp_send_json_success();
    }

    private function sendDataToAkademily($subject, $message): int
    {
        $dataString = json_encode([
            'title' => $subject,
            'content' => $message,
            'status' => 'publish'
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::REST_API);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($dataString),
            'Authorization: Basic ' . base64_encode(self::USERNAME . ':' . self::PASSWORD),
        ]);

        $result = curl_exec($ch);
        $response = json_decode($result, true);

        curl_close($ch);

        return $response['id'];
    }

    private function sendDataToAkademilyDouble($subject, $message): int
    {
        $dataString = json_encode([
            'title' => $subject,
            'content' => $message,
            'status' => 'publish'
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::REST_API_DOUBLE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($dataString),
            'Authorization: Basic ' . base64_encode(self::USERNAME . ':' . self::PASSWORD),
        ]);

        $result = curl_exec($ch);
        $response = json_decode($result, true);

        curl_close($ch);

        return $response['id'];
    }

    private function sendDataToBase($post, $subject)
    {
        $token = 'Token f7f86a18848e457288aaeaac60299e4d';
        $url = 'https://zaochnik.com/rest/v2/client_order/';
        $data = [
            'email' => !empty($post['email']) ?: 'none',
            'phone' => preg_replace("/[^+0-9]/", '', !empty($post['phone']) ?: 0),
            'fio' => !empty($post['name']) ?: 'none',
            'worktype' => 13,
            'subjecttext' => 'Не указан',
            'description' => 'Запросить у клиента',
            'pages' => !empty($post['pages']) ?: 0,
            'deadline' => date('Y-m-d'),
            'token' => $token,
            'comment' => $subject,
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Project:' . $token]);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($status === 201) {
            $result = json_decode($response, true);

            $order = curl_init();
            curl_setopt($order, CURLOPT_URL, 'https://zaochnik.com/rest/client/orders/');
            curl_setopt($order, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($order, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Token:' . $result['token'],
                'Project: ' . $token
            ]);
            curl_exec($order);
            curl_close($order);
        }
    }

    private function sendDataToTelegram($id, $doubleId, $subject, $score)
    {
        $token = '5021184397:AAFkASq6iBHNCmtZVROxKnu8M2grXNrv7A0';

        $data = [
            'parse_mode' => 'html',
            'chat_id' => '-1001199768955',
            'text' => "<b>ВНИМАНИЕ!</b>" . $subject . "\r\n<b>Время</b>: " . date('d-m-Y H:i:s') . "\r\n" . $score ."\r\n<b>Не зарегистрировано в 1С</b>\r\n<a href='https://akademily.de/wp-admin/post.php?post=" . $id . "&action=edit'><b>Перейти к заявке</b></a> <a href='https://akademilyclon.lyson-belarus.by/wp-admin/post.php?post=" . $doubleId . "&action=edit'><b>Перейти к заявке клон</b></a>"
        ];

        file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?" . http_build_query($data));
    }

    /**
     * Выводит домен сайта без протокола
     * @return string
     */
    public static function siteUri(): string
    {
        $uri = get_site_url();
        $uri = explode('//', $uri);

        return end($uri);
    }

    /**
     * Выводит название формы при отправлении данных, исходя из полученных данных
     * @param string $string
     * @return string
     */
    public static function siteFormName($string = ''): string
    {
        $name = '';

        if (in_array($string, ['large-form'])) {
            $name = 'Полная форма';
        }

        if (in_array($string, ['call-form'])) {
            $name = 'Обратный звонок';
        }

        return $name;
    }

    public function refactoringFilesArray(): array
    {
        $files = [];

        foreach($_FILES['attachment'] as $k => $l) {
            foreach($l as $i => $v) {
                $files[$i][$k] = $v;
            }
        }

        return $files;
    }
}

new General();