<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public function index()
	{
		$projects = \App\Project::all();
		
		return view('projects.index', [
			'projects' => $projects
		]);
    }
}
