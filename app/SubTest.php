<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTest extends Model
{
    protected $guarded = [];
    protected $table = 'sub_tests';

  
    public function parenttest()
{
    return $this->hasOne(ParentTest::class);
}
}
