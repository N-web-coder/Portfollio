<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'name' => 'FasalSetu',
                'category' => 'Laravel • Marketplace',
                'description' => 'A farmer-buyer platform for crop price comparison and enquiries.',
                'github' => '#',
                'demo' => '#',
                'icon' => 'fa-seedling',
            ],
            [
                'name' => 'Hostel Management System',
                'category' => 'Laravel • MySQL',
                'description' => 'Hostel admissions, room allocation, payments and staff management.',
                'github' => '#',
                'demo' => '#',
                'icon' => 'fa-building',
            ],
            [
                'name' => 'Online Marketplace',
                'category' => 'Laravel • CRUD',
                'description' => 'A marketplace for product listings, categories and location-based search.',
                'github' => '#',
                'demo' => '#',
                'icon' => 'fa-store',
            ],
            [
                'name' => 'Real-time Chat',
                'category' => 'Laravel • Reverb',
                'description' => 'A messaging application with file sharing and online status.',
                'github' => '#',
                'demo' => '#',
                'icon' => 'fa-comments',
            ],
        ];

        $skills = [
            'PHP',
            'Laravel',
            'MySQL',
            'REST APIs',
            'JavaScript',
            'Bootstrap',
            'HTML',
            'CSS',
            'Git',
            'GitHub',
        ];

        return view('portfolio', compact('projects', 'skills'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        // Yahan email notification ya database storage add karein.

        return back()->with(
            'success',
            'Thank you! Your message has been received.'
        );
    }

    public function project($id)
    {
        $projects = config('projects');

        $project = collect($projects)->firstWhere('number', $id);

        abort_if(!$project, 404);

        return view('projects', compact('project', 'projects'));
    }
}
