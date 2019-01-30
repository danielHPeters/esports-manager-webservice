<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User.
 *
 * @package App
 * @author Daniel Peters
 * @@version 1.0
 */
class User extends Authenticatable {
  use Notifiable;

  const TABLE_NAME = 'users';

  const ID = 'id';
  const NAME = 'name';
  const EMAIL = 'email';
  const PASSWORD = 'password';
  const REMEMBER_TOKEN = 'remember_token';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [self::NAME, self::EMAIL, self::PASSWORD];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [self::PASSWORD, self::REMEMBER_TOKEN];
}
