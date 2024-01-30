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
        'userSessionDuration'                => 7200,
        'phpMaxMemoryLimit'                  => '1024M',
        'addTrailingSlashesToUrls'           => true,
        'generateTransformsBeforePageLoad'   => true,
        'limitAutoSlugsToAscii'              => true,
        'optimizeImageFilesize'              => true,
        'convertFilenamesToAscii'            => true,
        'rotateImagesOnUploadByExifData'     => true,
        'omitScriptNameInUrls'               => true,
        'backupOnUpdate'                     => true,
        'autosaveDrafts'                     => false,
        'requireMatchingUserAgentForSession' => false,
        'preserveExifData'                   => false,
        'preserveImageColorProfiles'         => false,
        'allowUppercaseInSlug'               => false,
        'sendPoweredByHeader'                => false,
        'transformGifs'                      => false,
        'enableGql'                          => false,
        'csrfTokenName'                      => 'CRAFT_CSRF_TOKEN',
        'pageTrigger'                        => 'page',
        'defaultCpLanguage'                  => 'de',
        'timezone'                           => 'Europe/Berlin',
        'errorTemplatePrefix'                => 'system/errors/',
        'securityKey'                        => App::env('SECURITY_KEY'),
        'isSystemLive'                       => App::env('IS_SYSTEM_LIVE'),
        'devMode'                            => App::env('DEV_MODE'),
        'allowAdminChanges'                  => App::env('ALLOW_ADMIN_CHANGES'),
        'runQueueAutomatically'              => App::env('RUN_QUEUE_AUTOMATICALLY'),
        'enableTemplateCaching'              => App::env('ENABLE_TEMPLATE_CACHING'),
        'disallowRobots'                     => App::env('DISALLOW_ROBOTS'),
        'cpTrigger'                          => App::env('CP_TRIGGER'),
        'testToEmailAddress'                 => App::env('TEST_TO_EMAIL') ?: null,

        'defaultSearchTermOptions' => [
            'subLeft'  => true,
            'subRight' => true,
        ],

        'aliases' => [
            // General
            'siteUrl'            => $_SERVER['SERVER_NAME'],

            // DE
            'baseUrl'            => App::env('DEFAULT_SITE_URL'),
            'basePath'           => $_SERVER['DOCUMENT_ROOT'],

            // DE Aliases for console
            '@web'               => App::env('DEFAULT_SITE_URL'),
            '@webroot'           => $_SERVER['DOCUMENT_ROOT'],

            '@asset_url'         => App::env('ASSET_BASE_URL'),
            '@asset_path'        => CRAFT_BASE_PATH . App::env('ASSET_BASE_PATH'),
        ]
    ]
];
