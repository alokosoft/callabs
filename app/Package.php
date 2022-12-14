<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    public function parenttest()
    {
        return $this->belongsTo(ParentTest::class);
    }
}
