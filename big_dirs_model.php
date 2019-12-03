<?php

use munkireport\models\MRModel as Eloquent;

class big_dirs_model extends Eloquent
{
    protected $table = 'big_dirs';

    protected $fillable = [
      'serial_number',
      'item1',
      'item2',
    ];

    public $timestamps = false;

}
