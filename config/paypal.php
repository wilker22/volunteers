<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID','ATQcKVGGfyeOKTpiuUUAdgwm58IQXkIwV-ZiI-sUknnm4BILf1Mv5Jih4PTPXfjR07qSGudU63t3Lfpt'),
    'secret' => env('PAYPAL_SECRET','EFmta1wlW4lCiXiDK4LaJwIqc0657HdtFDlb1uRvuHzOh9KR214JyITY4FGq6FvV4W-zveSC_ehuDelG'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
