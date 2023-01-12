<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $guarded=[];

     public function seekerRelation()
     {
         return $this->belongsTo(User::class,'loan_seekers_id','id');
           
     }
  
     public function loanRelation()
     {
         return $this->belongsTo(Loan::class,'loan_id','id');
     }
}
