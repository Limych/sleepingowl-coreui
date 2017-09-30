<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Limych\SleepingOwlCoreUI;

use Illuminate\View\View;
use SleepingOwl\Admin\Contracts\Template\AssetsInterface;
use SleepingOwl\Admin\Templates\TemplateDefault;

class CoreUITemplate extends TemplateDefault
{

    /**
     * Get the name of template
     *
     * @return string
     */
    public function name()
    {
        return 'CoreUI';
    }

    /**
     * Get the version of template
     *
     * @return string
     */
    public function version()
    {
        return '1.0.0';
    }

    /**
     * Get the URL of template site
     *
     * @return string
     */
    public function homepage()
    {
        return 'http://coreui.io/';
    }

    /**
     * @return string
     */
    public function getViewNamespace()
    {
        return 'coreui';
    }

    /**
     * Получение относительного пути хранения asset файлов.
     *
     * @return string
     */
    public function assetDir()
    {
        $dir = parent::assetDir();
        $dir = dirname($dir) . '/coreui';
        return $dir;
    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        /** @var AssetsInterface $assets */
        $assets = $this->meta();

        $assets
//            ->addJs('admin-default', $this->assetPath('js/admin-app.js'))
            ->addJs('admin-vue-init', $this->assetPath('js/vue.js'))
//            ->addJs('admin-modules-load', $this->assetPath('js/modules.js'))
//            ->addCss('admin-default', $this->assetPath('css/admin-app.css'))
            ;
    }

    /**
     * @param string|View $view
     *
     * @return string
     */
    public function getViewPath($view)
    {
        if ($view instanceof View) {
            return $view->getPath();
        }

        if (strpos($view, '::') !== false) {
            return $view;
        }

        return $this->getViewNamespace().'::'.$view;
    }
}
