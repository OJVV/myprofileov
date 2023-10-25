<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    protected $table = 'contacts';
   
    public static function search($keyword)
    {
        return $query = Contact::where('name', 'like', "%$keyword%")
        ->orWhere('email', 'like', "%$keyword%")
        ->orWhere('phone', 'like', "%$keyword%")
        ->orWhere('created_at', 'like', "%$keyword%");
    }
    use HasFactory;
}
