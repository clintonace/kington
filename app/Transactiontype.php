<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transactiontype extends Model
{

    protected $table = "transactionstype";
   /**
    * Get all of the transaction for the Transactiontype
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function transaction(): HasMany
   {
       return $this->hasMany(Transaction::class);
   }
}
