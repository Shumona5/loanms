<?php

namespace App\Models;

use App\Models\LoanType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class criteria extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function loan_type_relation() 
    {
        return $this->belongsTo(LoanType::class,'type_id','id'); 
    }  
}
