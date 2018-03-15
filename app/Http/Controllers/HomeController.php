<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->render('pages.home.home');
    }

	public function about()
    {
        return response()->render('pages.about.about');
    }

	public function contacts()
    {
        return response()->render('pages.contacts.contacts');
    }

	public function projects()
    {
        return response()->render('projects.projects');
    }
}
