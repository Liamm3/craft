<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

return [
    '*' => [
        'defaultWeekStartDay'                => 1,
        'cooldownDuration'                   => 5,
        'maxBackups'                         => 10,
        'maxRevisions'                       => 20,
        'defaultImageQuality'                => 82,
        'maxUploadFileSize'                  => 134217728, // 128MB
        'phpMaxMemoryLimit'                  => '1024M',
        'enableCsrfProtection'               => true,
        'addTrailingSlashesToUrls'           => true,
        'generateTransformsBeforePageLoad'   => true,
        'limitAutoSlugsToAscii'              => true,
        'optimizeImageFilesize'              => true,
        'rotateImagesOnUploadByExifData'     => true,
        'omitScriptNameInUrls'               => true,
        'convertFilenamesToAscii'            => true,
        'backupOnUpdate'                     => true,
        'preserveExifData'                   => false,
        'preserveImageColorProfiles'         => false,
        'allowUppercaseInSlug'               => false,
        'sendPoweredByHeader'                => false,
        'transformGifs'                      => false,
        'requireMatchingUserAgentForSession' => false,
        'enableGql'                          => false,
        'autosaveDrafts'                     => false,
        'csrfTokenName'                      => 'CRAFT_CSRF_TOKEN',
        'pageTrigger'                        => 'page',
        'errorTemplatePrefix'                => 'errors/',
        'timezone'                           => 'Europe/Berlin',
        // 'cpTrigger'                          => App::env('CP_TRIGGER') ?: 'admin',
        'securityKey'                        => App::env('SECURITY_KEY'),
        'isSystemLive'                       => App::env('IS_SYSTEM_LIVE'),
        'devMode'                            => App::env('DEV_MODE'),
        'allowAdminChanges'                  => App::env('ALLOW_ADMIN_CHANGES'),
        'runQueueAutomatically'              => App::env('RUN_QUEUE_AUTOMATICALLY'),
        'enableTemplateCaching'              => App::env('ENABLE_TEMPLATE_CACHING'),
        'disallowRobots'                     => App::env('DISALLOW_ROBOTS'),

        'defaultSearchTermOptions' => [
            'subLeft'  => true,
            'subRight' => true
        ],

        'aliases' => [
            'baseUrl'  => getenv('PRIMARY_SITE_URL'),
            'basePath' => $_SERVER['DOCUMENT_ROOT'],
            '@web'     => getenv('PRIMARY_SITE_URL')
        ]
    ],

    'dev' => [
        'testToEmailAddress' => 'frank@craft-unit.de'
    ],

    'staging' => [
        'testToEmailAddress' => 'frank@craft-unit.de'
    ]
];