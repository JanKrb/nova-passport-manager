<?php

namespace GeneaLabs\NovaPassportManager;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaPassportManager extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-passport-manager', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-passport-manager', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * @inheritDoc
     */
    public function menu(Request $request)
    {
        return MenuSection::make('OAuth2')
            ->path('nova-passport-manager')
            ->icon('shield-check');
    }
}
