<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentTest extends Model
{
    protected $guarded = [];
    protected $table = 'parent_tests';

    public function subtest()
    {
        return $this->belongsTo(SubTest::class);
    }
}
