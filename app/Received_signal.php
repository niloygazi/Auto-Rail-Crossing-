<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Received_signal extends Model
{
  protected $fillable = [
    'date', 'enterSignal', 'trainCode', 'type',
 ];
}
