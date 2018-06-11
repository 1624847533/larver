<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/10
 * Time: 18:40
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    public $timestamps =true;
    public function getDateFormat()
    {
        return time();
    }
}