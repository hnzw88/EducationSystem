<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;


class Admin extends User
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'kana',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];


//パスワードリセットのリンクを設定
   public function sendPasswordResetNotification($token)
{
    $url = url("admin/password/reset/$token");
    $this->notify(new ResetPasswordNotification($url));
}

}
