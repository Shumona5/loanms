<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $guarded =[];

   public function loantype()
   {
      return $this-> belongsTo(LoanType::class,'type_id','id');
   }


}

