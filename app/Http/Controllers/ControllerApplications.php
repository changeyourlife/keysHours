<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;
use App\Http\Controllers\ControllerSteamApi;

class ControllerApplications extends Controller {
    public function sync() {
        $apps = ControllerSteamApi::GetAppList();
        $start = microtime(true);
        foreach ($apps->applist->apps as $app) {
            if ($app->appid == 5570) {
                $ok = 1;
                return response()->json([
                    'time' => round(microtime(true) - $start, 4)
                ]);
                /*
                 * {"time":422.2432}
                 * это ахуеть как много, надо уменьшить хотя бы на 3/4
                 */
            }
            $appAchievements = ControllerSteamApi::GetAppInfo($app->appid);
            if (isset($appAchievements->game)) {
                if (!empty( $appAchievements->game)) {
                    if ($app->appid == 5570) {
                        $ok = 1;
                        return response()->json([
                            'time' => round(microtime(true) - $start, 4)
                        ]);
                    } elseif ($app->appid == 220) {
                        $ok = 0;
                    }
                    /*if ($this->isExistAppInDB($app)) {
                        $this->updateApp($app);
                        continue;
                    }
                    $this->addApp($app);*/
                }
            }
        }
    }

    public function addApp($app) {
        $appDb = new Applications();
        $appDb->appid = $app->appid;
        $appDb->name = $app->name;

        $result = $appDb->save();

        return $result;
    }

    public function updateApp($app) {
        $appDb = Applications::find($app->appid);
        $result = $appDb->update([
            'name' => $app->name,
        ]);

        return $result;
    }

    public function isExistAppInDB($app) {
        $appDb = Applications::find($app->appid);

        return empty($appDb) ? false : true;
    }
}
