<?php
foreach (Helper::type() as $type) {
    echo '<option value="' . $type . '">' . $type . '</option>';
}