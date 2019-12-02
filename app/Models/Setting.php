<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Setting extends Model
{

    protected $primaryKey = false;

    protected $table = 'settings';


    protected $fillable = ['key', 'value'];


    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->first();
        if (!$entry) {
            return;
        }
        return $entry;
    }

    public static function set($key, $value = null)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->firstOrFail();
        $data = [
            $key => $value
        ];
        $entry->saveOrFail($data);

        Config::set('key', $value);
        if (Config::get($key) === $value) {
            return true;
        }
        return false;
    }

}
