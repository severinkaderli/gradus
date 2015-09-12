<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['grade', 'factor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject() {
        return $this -> belongsTo('App\Subject');
    }
}
