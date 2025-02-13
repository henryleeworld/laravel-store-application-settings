<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSettings;

class SettingsController extends Controller
{
    public function show(GeneralSettings $settings) 
    {
        echo __('Site name before saving:') . $settings->site_name . PHP_EOL;
        $settings->site_name   = __('Henry Lee\'s World');
        $settings->site_active = true;
        $settings->save();
        echo __('Site name after saving:') . $settings->site_name . PHP_EOL;
    }
}
