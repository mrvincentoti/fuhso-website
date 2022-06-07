<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', false), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '46465037c7d92864bf8d29cf8640b016933c18ffd18a8bf6341bf857962585f6'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'fuhso_fuhso',
            'password' => 'yG]j[x5*^4!M',
            'database' => 'fuhso_fuhso',
            'log' => true,
            'url' => env('DATABASE_URL', null),
        ],
    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'in-v3.mailjet.com',
            'port' => 587,
            'username' => 'c48daa7f0a4313ff4fa8b3f83531f729',
            'password' => '5208e1f03688c4ef4b4472408884929f',
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
        'mailjet' => [
        'host' => 'in-v3.mailjet.com',
        'port' => 587,
        'timeout' => 60,
        'username' => 'info@fuhso.ng',
        'password' => '$xFIVgpnx5gg',
        'className' => 'Smtp'
    ]
    ],
];
