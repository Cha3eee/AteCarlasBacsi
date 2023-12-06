<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class Admins extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, HasApiTokens, AuthenticatableTrait;

    protected $guarded = [];

    // Your model code...
}

