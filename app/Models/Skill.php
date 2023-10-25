<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use function Laravel\Prompts\search;

class Skill extends Model
{
    public $searchable = true;
    private $pagination = 5;
    use HasFactory;
   
    

    public static function search($keyword)
    {
        return Skill::where('name', 'like', "%$keyword%")
            ->orWhere('slug', 'like', "%$keyword%")
            ->orWhere('percentage', 'like', "%$keyword%")
            ->orWhere('created_at', 'like', "%$keyword%");
    }
}
