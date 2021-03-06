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
     * @param $query
     * @return mixed
     */
    public function scopeArchived($query)
    {
        return $query->where('archived', 1);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeUnArchived($query)
    {
        return $query->where('archived', 0);
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
            if($subject->getAverage() > 0) {
                array_push($gradeArray, $subject->getAverage() * $subject->factor);
                array_push($factorArray, $subject->factor);
            }
        }
        if (!empty($gradeArray) && !empty($factorArray)) {
            return number_format(round(array_sum($gradeArray) / array_sum($factorArray), 1), 1);
        } else {
            return 0.0;
        }

    }
}
