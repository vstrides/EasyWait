<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'user_id',
        'seq_num',
        'status',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

}
