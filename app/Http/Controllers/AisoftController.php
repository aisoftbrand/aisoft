<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AisoftController extends Controller
{
    public function index()
    {
        return view('aisoft.index');
    }

    public function classifieds()
    {
        return view('aisoft.classifieds');
    }

    public function profile($id)
    {
        return view('aisoft.profile', ['id' => $id]);
    }
}
