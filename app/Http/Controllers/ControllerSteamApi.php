<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSteamApi extends Controller {
    //key for Steam API
    public static $apiKey = '2E549264500892953B4EEB6F2D7A5B6B';

    //GetSchemaForGame — get all achievements by game id
    public static function GetAppList() {
        $data = file_get_contents('https://api.steampowered.com/ISteamApps/GetAppList/v2/');

        return json_decode($data);
    }

    public static function GetAppInfo($appid = 0) {
        $url = 'https://api.steampowered.com/ISteamUserStats/GetSchemaForGame/v2/?key='.self::$apiKey.'&appid='.$appid;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        return json_decode($data);
    }
}