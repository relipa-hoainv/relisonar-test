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

    private $test = 'testzzzzzzzzzzzzz';
    private $test2 = 'test2123';
    private $test3 = 'tttt';
    private $test4 = '12345876';
    private $test5 = '12345876';

    private function testComment() {
        $test2 = 1;
        return null;
        $xxx = '';
        $this->test = $xxx;
        echo 'OKです。';
        echo 'OKxxx';
    }

}
