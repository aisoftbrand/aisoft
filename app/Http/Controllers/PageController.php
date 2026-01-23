<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function classifieds()
    {
        return view('pages.classifieds');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function signin()
    {
        return view('pages.signin');
    }

    public function signup()
    {
        return view('pages.signup');
    }

    public function getServicesData()
    {
        $services = [
            [
                'name' => 'Drip Marketing',
                'icons' => ['meta', 'google-ads', 'google-sheets', 'appscript']
            ],
            [
                'name' => 'AI Solutions',
                'icons' => ['python', 'langchain', 'huggingface', 'azure']
            ],
            [
                'name' => 'ML Models',
                'icons' => ['python', 'aws', 'huggingface']
            ],
            [
                'name' => 'Web Development',
                'icons' => ['php', 'nextjs', 'tailwindcss', 'mysql', 'react', 'mongodb']
            ],
            [
                'name' => 'App Development',
                'icons' => ['swift', 'xcode', 'android', 'react-native', 'supabase']
            ]
        ];

        return response()->json($services);
    }
}
