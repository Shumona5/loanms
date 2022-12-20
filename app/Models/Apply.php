<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function loanRelation()
    {
        return $this->belongsTo(Loan::class,'loan_id','id');
    }
}




