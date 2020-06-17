<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['name', 'matricula', 'job-title', 'folio', 'teacher1', 'teacher2', 'teacher3', 'carrer'];

    public function scopeMatricula($query, $matricula)
    {
        return $query->where('matricula', 'LIKE', "%$matricula%");
    }
}
