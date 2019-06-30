<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserTable extends Model
{
    protected $connection = 'mysql_1';
    protected $table = 'pre_users';
}
