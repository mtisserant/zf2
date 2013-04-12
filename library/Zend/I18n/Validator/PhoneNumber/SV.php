<?php
return array(
    'code' => '503',
    'patterns' => array(
        'national' => array(
            'general' => '/^[267]\\d{7}|[89]\\d{6}(?:\\d{4})?$/',
            'fixed' => '/^2[1-6]\\d{6}$/',
            'mobile' => '/^[67]\\d{7}$/',
            'tollfree' => '/^800\\d{4}(?:\\d{4})?$/',
            'premium' => '/^900\\d{4}(?:\\d{4})?$/',
            'emergency' => '/^911$/',
        ),
        'possible' => array(
            'general' => '/^\\d{7,8}|\\d{11}$/',
            'fixed' => '/^\\d{8}$/',
            'mobile' => '/^\\d{8}$/',
            'tollfree' => '/^\\d{7}(?:\\d{4})?$/',
            'premium' => '/^\\d{7}(?:\\d{4})?$/',
            'emergency' => '/^\\d{3}$/',
        ),
    ),
);