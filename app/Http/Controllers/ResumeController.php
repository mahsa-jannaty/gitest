<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        // Retrieve all resumes from the database
        $resumes = Resume::all();

        // Pass resumes to the view for display
        return view('resumes.index', compact('resumes'));
    }
    public function create()
    {
        // Return the view for creating a new resume
        return view('resumes.create');
    }

    public function store(Request $request)
    {
        // Validate and store the submitted resume data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'summary' => 'required|string',
            'experience' => 'required|string',
            'education' => 'required|string',
        ]);

        Resume::create($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('resumes.index')->with('success', 'Resume created successfully!');
    }
}
