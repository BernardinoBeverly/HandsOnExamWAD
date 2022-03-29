<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //create a function to display the home page
    public function home()
    {
        //create a array name homeContent
        $homeContent = [
            'title' => 'Welcome to Laravel Clone!',
            'subtitle' => 'The PHP Framework',
            'subSubtitle' => 'for Web Artisans',
            'body' => 'Laravel is a web application framework with expressive, elegant syntax.',
        ];

        return view('pages.home')->with($homeContent);
    }

    //create a function to display the project page
    public function project()
    {
        //create a array name projectContent
        $projectContent = array(
            'title' => 'Laravel Project Ideas',
            'ideas' => ['Ebooks Website', 'Tutorial Website With CMS', 'Online Examination', 'Blog Site'],
            'ideasImgs' => ['images/e-books.JPG', 'images/cms.JPG', 'images/exam.JPG', 'images/blog.JPG']
        );
        return view('pages.project')->with($projectContent);
    }

    //create a function to display the about page
    public function about()
    {
        //create a array name aboutContent
        $aboutContent = [
            'title' => 'About Laravel',
            'subtitle' => 'The PHP Framework For Web Artisans',
            'subSubtitle' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern.',
            'body' => 'Laravel is a web application framework with expressive, elegant syntax. It is intended for the development of web applications following the model–view–controller (MVC) architectural pattern.
            The Laravel web framework benefits from the unique features of PHP, such as first-class functions, dynamic object-oriented programming, and a simple but powerful templating language called Blade.
            Laravel 4.0 is the latest version of Laravel, and it is the most popular PHP framework for developing web applications.',
        ];
        return view('pages.about')->with($aboutContent);
    }
}
