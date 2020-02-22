<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $table = "transaction_details";
    protected $fillable = [
        'transactions_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [];



    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'travel_packages_id', 'id');
    }
}
