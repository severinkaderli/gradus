<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }

    /**
     * @return float
     */
    //TODO: Optimize this code
    public function getAverage()
    {
        $subjects = $this->subjects;
        $gradeArray = [];
        $factorArray = [];
        foreach ($subjects as $subject) {
            array_push($gradeArray, $subject->getAverage() * $subject->factor);
            array_push($factorArray, $subject->factor);
        }
        if (!empty($gradeArray) && !empty($factorArray)) {
            return round(array_sum($gradeArray) / array_sum($factorArray), 1);
        } else {
            return 0.0;
        }

    }
}
