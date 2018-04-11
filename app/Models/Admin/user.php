<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $table = 'users';
    protected $fillable = ['username', 'age','upic','sex','tel','status','auth','score','uaddr'];
}
