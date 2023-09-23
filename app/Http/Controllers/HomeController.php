<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $project = Project::all();

        return view('home.index', compact('user', 'project'));
    }

    public function showProject($id)
    {
        $user = User::find(1);
        $project = Project::find($id);

        return view('home.project', compact('project', 'user'));
    }
}
