<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
