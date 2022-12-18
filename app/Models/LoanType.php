<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanType extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function criteriaRel()
    {
        return $this->hasMany(criteria::class,'type_id','id');
    }
}
