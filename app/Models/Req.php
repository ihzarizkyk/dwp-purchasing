<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    use HasFactory;

    protected $table = "requests";

    public function category()
    {
        return $this->hasOne(Category::class,"id");
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class,"id");
    }
}
