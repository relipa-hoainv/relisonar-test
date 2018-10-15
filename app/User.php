<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    private $test = 'testtest';
    private $test2 = 'test2test2';

    private function testWIP() {
        $this->test = 'failed';
        return $test;
    }

    private function unUsed() {
        $unUse = true;
        return null;
        $test = 1;
        $test2 = 2;
    }
}
