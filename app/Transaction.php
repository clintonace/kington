<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{

    protected $table = "transactions";
    protected $guarded = [];
   /**
    * Get the user that owns the Transaction
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class);
   }
   /**
    * Get all of the transactionstype for the Transaction
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function transactionstype(): BelongsTo
   {
       return $this->belongsTo(Transactiontype::class, 'transaction_type_id', 'id');
   }
}
