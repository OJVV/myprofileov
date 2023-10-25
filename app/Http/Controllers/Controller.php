<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, DispatchesJobs;

    public function index()
    {
        $skills = Skill::inRandomOrder()->limit(5)->get(['id','name','percentage']);
        return view('dashboard',compact('skills'));
    }
}
