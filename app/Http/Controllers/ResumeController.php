<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ResumeController extends Controller
{
    /**
     * Show the form to create a new resume.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('resume-form');
    }

    /**
     * Handle the form submission and generate the resume.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function generateResume(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'degree' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'skills' => 'required|string',
            'address' => 'nullable|string',
            'linkedin' => 'nullable|url',
            'cgpa' => 'nullable|numeric|min:0|max:10',
            'year' => 'nullable|integer|min:1900|max:' . (date('Y')),
            'jobTitle' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'workDescription' => 'nullable|string',
        ]);

        // Pass the validated data to the view
        return view('resume-preview', compact('data'));
    }
}