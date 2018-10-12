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

    protected $test = 'testtest';
    protected $test2 = 'test2test2';

    private $check_WIP = true;
    private $check_WIP1 = true;
    private $check_WIP2 = true;

    private function newPR() {
        $test = 'not-good';
        return null;
        $test = 'OK';
        $wip = 'ok';
    }

    private function testSkipWIP () {
        
    }
}
