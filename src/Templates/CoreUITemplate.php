<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Limych\SleepingOwlCoreUI\Templates;

use Illuminate\View\View;
use KodiCMS\Assets\Assets;
use Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider;
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
     * Get the path to template assets.
     *
     * @return string
     */
    public function assetDir()
    {
        return CoreUIServiceProvider::ASSETS_URL;
    }

    /**
     * Initialize class.
     */
    public function initialize()
    {
        /** @var Assets $assets */
        $assets = $this->meta();

        $reg = '/^' . preg_quote($this->getViewNamespace() . '::', '/') . '/';

        foreach (config('coreui.styles', []) as $handle => $style) {
            if (! is_array($style)) {
                $style = [$style];
            }
            array_unshift($style, $handle);

            // Replace template namespace in path to asset dir
            $style[1] = preg_replace($reg, $this->assetDir(), $style[1]);

            call_user_func_array([$assets, 'addCss'], $style);
        }

        foreach (config('coreui.scripts', []) as $handle => $script) {
            if (! is_array($script)) {
                $script = [$script];
            }
            array_unshift($script, $handle);

            // Replace template namespace in path to asset dir
            $script[1] = preg_replace($reg, $this->assetDir(), $script[1]);

            call_user_func_array([$assets, 'addJs'], $script);
        }
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
