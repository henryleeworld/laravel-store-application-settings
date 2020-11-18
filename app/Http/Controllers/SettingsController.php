<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSettings;

class SettingsController extends Controller
{
    public function show(GeneralSettings $settings) 
    {
        echo '儲存前網站名稱：' . $settings->site_name . PHP_EOL;
        $settings->site_name   = '亨利的世界';
        $settings->site_active = true;
        $settings->save();
        echo '儲存後網站名稱：' . $settings->site_name . PHP_EOL;
    }
}
