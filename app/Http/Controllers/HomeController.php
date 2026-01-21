<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('aisoft.index');
    }

    public function profile($id)
    {
        $profiles = [
            1 => [
                'name' => 'Aether Logistics', 
                'category' => 'Autonomous Supply Chain',
                'logo' => 'https://placehold.co/150x150/1a1a1a/ffffff?text=A',
                'coverImage' => 'https://images.unsplash.com/photo-1587024628414-953b0e1a144e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'mission' => 'To build the world\'s most efficient, transparent, and autonomous supply chain.',
                'stats' => ['yearsActive' => 5, 'projectsCompleted' => 120],
                'services' => ['Web Development', 'Cloud Infrastructure', 'AI Integration']
            ]
            // Add other profiles here
        ];

        $profile = $profiles[$id] ?? null;

        if (!$profile) {
            abort(404);
        }

        return view('aisoft.profile', ['profile' => $profile]);
    }
}
