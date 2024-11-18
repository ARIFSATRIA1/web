<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function inputCourses(Request $request)
    {
        try {
            // Check if the authenticated user is an admin
            if (Auth::check() && Auth::user()->role !== 'admin') {
                return redirect('/')->withErrors(['error' => 'Unauthorized access']);
            }

            // Validate the request data
            $validated = $request->validate([
                'tittle' => ['required'],
                'description' => ['required'],
                'thumbnail' => ['required']
            ]);

            // Create a new course
            $course = Courses::create([
                'tittle' => $request->tittle,
                'description' => $request->description,
                'thumbnail' => $request->thumbnail,
            ]);

            return redirect('/admin/courses')->with('success', 'Course added successfully!');
        } catch (\Throwable $th) {
            return redirect('/admin/courses/create')->withErrors(['error' => 'Something went wrong: ' . $th->getMessage()]);
        }
    }
}
