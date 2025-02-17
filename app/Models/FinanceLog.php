<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceLog extends Model
{
    protected $table = 'finance_logs';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
