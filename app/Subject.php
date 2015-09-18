<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'factor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany('App\Grade');
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
     * @return float
     */
    //Optimize this code
    public function getAverage()
    {
        $grades = $this->grades;
        $gradeArray = [];
        $factorArray = [];
        foreach ($grades as $grade) {
            array_push($gradeArray, $grade->grade * $grade->factor);
            array_push($factorArray, $grade->factor);
        }
        if (!empty($gradeArray) && !empty($factorArray)) {
            return round(array_sum($gradeArray) / array_sum($factorArray), 1);
        } else {
            return 0.0;
        }

    }
}
