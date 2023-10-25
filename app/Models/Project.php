<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $searchable = true;
    private $pagination = 5;
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'id',
        'title',
        'project_image',
        'link',
        
    ];


    public static function search($keyword)
    {
        return $query = Project::where('title', 'like', "%$keyword%")
        ->orWhere('link', 'like', "%$keyword%")
        ->orWhere('created_at', 'like', "%$keyword%");
    }
}
