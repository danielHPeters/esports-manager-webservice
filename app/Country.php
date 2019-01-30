<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country.
 *
 * @package App
 * @author Daniel Peters
 * @version 1.0
 */
class Country extends Model {
  const TABLE_NAME = 'countries';

  const ID = 'id';
  const ISO_CODE = 'iso_code';
  const NAME = 'name';

  /**
   * @var array
   */
  protected $fillable = [self::ISO_CODE, self::NAME];
}
