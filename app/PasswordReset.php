<?php

namespace App;

/**
 * Class PasswordReset.
 *
 * @package App
 * @author Daniel Peters
 * @version 1.0
 */
class PasswordReset {
  const TABLE_NAME = 'password_resets';

  const ID = 'id';
  const EMAIL = User::EMAIL;
  const TOKEN = 'token';
  const CREATED_AT = 'created_at';
}
