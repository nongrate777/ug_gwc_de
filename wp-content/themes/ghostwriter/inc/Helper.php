<?php

class Helper
{
    /**
     * Выводит актуальные данные менеджера в зависимости от дня недели и времени
     * @param false $type
     * @return string
     */
    public static function managers($type = false): string
    {
        $dd = getdate();
        $name = '';

        if ($dd['wday'] == 1) {
            if ($dd['hours'] >= 7 && $dd['hours'] <= 16) {
                $name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0?chat'; // Sandra
            }
            if ($dd['hours'] >= 16 && $dd['hours'] <= 18) {
                $name = ($type) ? '4915776539420' : 'live:.cid.6571d4a7f9dbc179?chat'; // Helga
            }
            if ($dd['hours'] >= 18 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0?chat'; // Sandra
            }
        }

        if ($dd['wday'] == 2) {
            if ($dd['hours'] >= 7 && $dd['hours'] <= 13) {
                $name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477?chat'; // Rebecca
            }
            if ($dd['hours'] >= 13 && $dd['hours'] <= 18) {
                $name = ($type) ? '4915776539420' : 'live:.cid.6571d4a7f9dbc179?chat'; // Helga
            }
            if ($dd['hours'] >= 18 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477?chat'; // Rebecca
            }
        }

        if ($dd['wday'] == 3) {
            if ($dd['hours'] >= 7 && $dd['hours'] <= 9) {
                $name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477?chat'; // Rebecca
            }
            if ($dd['hours'] >= 9 && $dd['hours'] <= 18) {
                $name = ($type) ? '4915776539420' : 'live:.cid.6571d4a7f9dbc179?chat'; // Helga
            }
            if ($dd['hours'] >= 18 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477?chat'; // Rebecca
            }
        }

        if ($dd['wday'] == 4) {
            if ($dd['hours'] >= 7 && $dd['hours'] <= 9) {
                $name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0?chat'; // Sandra
            }
            if ($dd['hours'] >= 9 && $dd['hours'] <= 18) {
                $name = ($type) ? '4915776539420' : 'live:.cid.6571d4a7f9dbc179?chat'; // Helga
            }
            if ($dd['hours'] >= 18 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915776536749' : 'valyushka_0107?chat'; // Valine
            }
        }

        if ($dd['wday'] == 5) {
            if ($dd['hours'] >= 7 && $dd['hours'] <= 16) {
                $name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0?chat'; // Sandra
            }
            if ($dd['hours'] >= 18 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915776536749' : 'valyushka_0107?chat'; // Valine
            }
        }

        if ($dd['wday'] == 6) {
            if ($dd['hours'] >= 7 && $dd['hours'] <= 18) {
                $name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477?chat'; // Rebecca
            }
            if ($dd['hours'] >= 18 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915175590498' : 'live:lazarevich2001?chat'; // Erika
            }
        }

        if ($dd['wday'] == 7) {
            if ($dd['hours'] >= 9 && $dd['hours'] <= 22) {
                $name = ($type) ? '4915776539420' : 'live:.cid.6571d4a7f9dbc179?chat'; // Helga
            }
        }

        return $name;
    }

    public static function type($id = 0)
    {
        $data = [
            'Diplomarbeit',
            'Bachelorarbeit',
            'Online Prüfung',
            'Doktorarbeit',
            'Masterarbeit',
            'Hausarbeit',
            'Statistische Auswertung',
            'Businessplan',
            'Biografie',
            'Forschungsartikel',
            'Facharbeit',
            'Abschlussarbeit',
            'Magisterarbeit',
            'Exposé',
            'Zusammenfassung',
        ];

        return !empty($id) ? $data[$id] : $data;
    }
}