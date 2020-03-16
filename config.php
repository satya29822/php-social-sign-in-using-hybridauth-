<?php
/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 *
 * Set the Authorization callback URL to 
 * Understandably, you need to replace 'path/to/hybridauth' with the real path to this script.
 */
$config = [
    // here you put the final callback for the url and also need the same url every place like redirct url for google must be same
    'callback' => 'http://localhost/hybridauth/hybridauth-3.2.0/examples/example_07/callback.php',
    'providers' => [

        'google' => [
            'enabled' => true,
            'keys' => [
                'id'     => 'your google id',
                'secret' => 'your google secret id',
            ],
            'scope' => 'email',
        ],

        // 'Yahoo'     => ['enabled' => true, 'keys' => [ 'key'  => '...', 'secret' => '...']],
        'facebook'  => ['enabled' => true, 
            'keys' => [ 
                'id'   => 'your facebook secret id', 
                'secret' => 'your facebook secret id',
            ]
        ],
        'linkedin'   => ['enabled' => true,
             'keys' => [ 
                'id'  => 'your linkedin secret id', 
                'secret' => 'your linkedin secret id'
            ]],
        //'Twitter'   => ['enabled' => true, 'keys' => [ 'key'  => '...', 'secret' => '...']],

        // 'Instagram' => ['enabled' => true, 'keys' => [ 'id'   => '...', 'secret' => '...']],

    ],
];
