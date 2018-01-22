<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ControllerSteamApi;

class Applications extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'appid';
    protected $fillable = [
        'appid',
        'name',
    ];
}
