<?php

namespace modules\base;

use Craft;
use yii\base\Module as BaseModule;

/**
 * base module
 *
 * @method static Module getInstance()
 */
class Module extends BaseModule
{
    public function init(): void
    {
        Craft::setAlias('@modules/base', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = 'modules\\base\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\base\\controllers';
        }

        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();
            // ...
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    }
}
