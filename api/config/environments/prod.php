<?php
return [
   
    'debug' => filter_var(env('DEBUG', false), FILTER_VALIDATE_BOOLEAN),

    'App' => [
        'namespace' => 'App',
        'encoding' => env('APP_ENCODING', 'UTF-8'),
        'defaultLocale' => env('APP_DEFAULT_LOCALE', 'en_US'),
        'base' => false,
        'dir' => 'src',
        'webroot' => 'webroot',
        'wwwRoot' => WWW_ROOT,
        // 'baseUrl' => env('SCRIPT_NAME'),
        'subDomain' => 'rabunabi',
        'fullBaseUrl' => false,
        'socketBaseUrl' => 'http://54.168.213.169:3001/chat-rabunabi',
        'imageBaseUrl' => 'img/',
        'cssBaseUrl' => 'css/',
        'jsBaseUrl' => 'js/',
        'paths' => [
            'plugins' => [ROOT . DS . 'plugins' . DS],
            'templates' => [APP . 'Template' . DS],
            'locales' => [APP . 'Locale' . DS],
        ],
    ],

   
    'Security' => [
        'salt' => env('SECURITY_SALT', '5a7a24eee102c2d83aa914059370db12371af545037751583c48e8a528102938'),
    ],

  
    'Asset' => [
        // 'timestamp' => true,
    ],

   
    'Cache' => [
        'default' => [
            'className' => 'File',
            'path' => CACHE,
            'url' => env('CACHE_DEFAULT_URL', null),
        ],

        '_cake_core_' => [
            'className' => 'File',
            'prefix' => 'myapp_cake_core_',
            'path' => CACHE . 'persistent/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKECORE_URL', null),
        ],

        '_cake_model_' => [
            'className' => 'File',
            'prefix' => 'myapp_cake_model_',
            'path' => CACHE . 'models/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKEMODEL_URL', null),
        ],
    ],

    'Error' => [
        'errorLevel' => E_ALL,
        'exceptionRenderer' => 'Cake\Error\ExceptionRenderer',
        'skipLog' => [],
        'log' => true,
        'trace' => true,
    ],

    'EmailTransport' => [
        'default' => [
            'className' => 'Mail',
            // The following keys are used in SMTP transports
            'host' => 'localhost',
            'port' => 25,
            'timeout' => 30,
            'username' => null,
            'password' => null,
            'client' => null,
            'tls' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],

    'Email' => [
        'default' => [
            'transport' => 'default',
            'from' => 'you@localhost',
            //'charset' => 'utf-8',
            //'headerCharset' => 'utf-8',
        ],
    ],

    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
           
            'username' => 'root',
            'password' => 'linkup@Aa123',
            'database' => 'rabunabi_db',
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,

            /**
             * Set identifier quoting to true if you are using reserved words or
             * special characters in your table or column names. Enabling this
             * setting will result in queries built using the Query Builder having
             * identifiers quoted when creating SQL. It should be noted that this
             * decreases performance because each query needs to be traversed and
             * manipulated before being executed.
             */
            'quoteIdentifiers' => false,

            /**
             * During development, if using MySQL < 5.6, uncommenting the
             * following line could boost the speed at which schema metadata is
             * fetched from the database. It can also be set directly with the
             * mysql configuration directive 'innodb_stats_on_metadata = 0'
             * which is the recommended value in production environments
             */
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],

            'url' => env('DATABASE_URL', null),
        ],

        /**
         * The test connection is used during the test suite.
         */
        'test' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'quoteIdentifiers' => false,
            'log' => false,
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
            'url' => env('DATABASE_TEST_URL', null),
        ],
    ],

    /**
     * Configures logging options
     */
    'Log' => [
        'result' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => date( 'Ymd') . '_' . 'result',
            'levels' => ['info'],
            'scopes' => ['result'],
            'url' => env('LOG_DEBUG_URL', null),
        ],
        'debug' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'debug',
            'url' => env('LOG_DEBUG_URL', null),
            'scopes' => false,
            'levels' => ['notice', 'info', 'debug'],
        ],
        'error' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'error',
            'url' => env('LOG_ERROR_URL', null),
            'scopes' => false,
            'levels' => ['warning', 'error', 'critical', 'alert', 'emergency'],
        ],
        // To enable this dedicated query log, you need set your datasource's log flag to true
        'queries' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'queries',
            'url' => env('LOG_QUERIES_URL', null),
            'scopes' => ['queriesLog'],
        ],
        'shell' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => date( 'Ymd') . '_' . 'shell',
            'levels' => ['info'],
            'scopes' => ['shell'],
            'url' => env('LOG_DEBUG_URL', null),
        ],
    ],

    /**
     * Session configuration.
     *
     * Contains an array of settings to use for session configuration. The
     * `defaults` key is used to define a default preset to use for sessions, any
     * settings declared here will override the settings of the default config.
     *
     * ## Options
     *
     * - `cookie` - The name of the cookie to use. Defaults to 'CAKEPHP'. Avoid using `.` in cookie names,
     *   as PHP will drop sessions from cookies with `.` in the name.
     * - `cookiePath` - The url path for which session cookie is set. Maps to the
     *   `session.cookie_path` php.ini config. Defaults to base path of app.
     * - `timeout` - The time in minutes the session should be valid for.
     *    Pass 0 to disable checking timeout.
     *    Please note that php.ini's session.gc_maxlifetime must be equal to or greater
     *    than the largest Session['timeout'] in all served websites for it to have the
     *    desired effect.
     * - `defaults` - The default configuration set to use as a basis for your session.
     *    There are four built-in options: php, cake, cache, database.
     * - `handler` - Can be used to enable a custom session handler. Expects an
     *    array with at least the `engine` key, being the name of the Session engine
     *    class to use for managing the session. CakePHP bundles the `CacheSession`
     *    and `DatabaseSession` engines.
     * - `ini` - An associative array of additional ini values to set.
     *
     * The built-in `defaults` options are:
     *
     * - 'php' - Uses settings defined in your php.ini.
     * - 'cake' - Saves session files in CakePHP's /tmp directory.
     * - 'database' - Uses CakePHP's database sessions.
     * - 'cache' - Use the Cache class to save sessions.
     *
     * To define a custom session handler, save it at src/Network/Session/<name>.php.
     * Make sure the class implements PHP's `SessionHandlerInterface` and set
     * Session.handler to <name>
     *
     * To use database sessions, load the SQL file located at config/schema/sessions.sql
     */
    'Session' => [
        'defaults' => 'php',
    ],
];
