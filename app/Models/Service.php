<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";

    public static function search($keyword){
        return $query = Service::where('title', 'like', "%$keyword%")
        ->orWhere('created_at', 'like', "%$keyword%");
    }
}
