<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admincourse()
    {
        $course = Course::all();
        return view('admin.course')->with('course', $course);
    }

    public function showCourseData()
    {
        // Split the data into two arrays for left and right columns
        $course = Course::where('status', 'published')
            ->orderBy('rank', 'desc')
            ->latest()
            ->get();
        // $rightData = [];
        // foreach ($projects as $key => $item) {
        //     $rightData[] = $item;
        // }
    
        return $course;
    }

    public function showAllCourseData()
    {
        // Split the data into two arrays for left and right columns
        $course = Course::where('status', 'published')
            ->orderBy('rank', 'desc')
            ->latest()
            ->get();
        $rightData = [];
        foreach ($course as $key => $item) {
            $rightData[] = $item;
        }
    
        return $rightData;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate if a file is uploaded
            if ($request->hasFile('image')) {
                $requestdata = $request->all();
                $fileName = time() . $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('img', $fileName, 'public');
                $requestdata['image'] = '/storage/' . $path;
                Course::create($requestdata);
                return redirect('/user/course')->with('success', 'Program added successfully');
            } else {
                // Handle case where no file is uploaded
                return redirect()->back()->with('error', 'Please upload an image');
            }
        } catch (\Exception $e) {
            // Handle any exception that occurs
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        return view('admin.updatecourse', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'coursetitle' => 'required|string|max:255',
                'coursename' => 'required|string|max:255',
                'faculty' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'university' => 'required|string|max:255',
                'duration' => 'required|string|max:255',
                'deliverymethod' => 'required|string|max:255',
                'coursefee' => 'required|string|max:255',
                'nextintake' => 'required|string|max:255',
                'eligibility01' => 'required|string',
                'eligibility02' => 'required|string',
                'eligibility03' => 'required|string',
                'weburl' => 'required|string|max:255',
                'moredetailsurl' => 'required|string|max:255',
                'telephone' => 'required|string|max:255',
                'coordinator' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'rank' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $course = Course::findOrFail($id);
    
            // Update employee data
            $course->coursetitle = $request->input('coursetitle');
            $course->coursename = $request->input('coursename');
            $course->faculty = $request->input('faculty');
            $course->department = $request->input('department');
            $course->university = $request->input('university');
            $course->duration = $request->input('duration');
            $course->deliverymethod = $request->input('deliverymethod');
            $course->coursefee = $request->input('coursefee');
            $course->nextintake = $request->input('nextintake');
            $course->eligibility01 = $request->input('eligibility01');
            $course->eligibility02 = $request->input('eligibility02');
            $course->eligibility03 = $request->input('eligibility03');
            $course->eligibility04 = $request->input('eligibility04');
            $course->eligibility05 = $request->input('eligibility05');
            $course->eligibility06 = $request->input('eligibility06');
            $course->applyonlineurl = $request->input('applyonlineurl');
            $course->weburl = $request->input('weburl');
            $course->moredetailsurl = $request->input('moredetailsurl');
            $course->telephone = $request->input('telephone');
            $course->coordinator = $request->input('coordinator');
            $course->email = $request->input('email');
            $course->description = $request->input('description');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('img', $fileName, 'public');
                $course->image = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $course->save();
    
            return redirect()->route('admincourse')->with('success', 'Program updated successfully');
        } 
        catch (\Exception $e) 
        {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admincourse')->with('success', 'Program deleted successfully');
    }

    public function publish($id)
    {
        $course = Course::findOrFail($id);
        $course->status = 'published';
        $course->save();

        return redirect()->route('admincourse')->with('success', 'Program published on web successfully');
    }

    public function unpublish($id)
    {
        $course = Course::findOrFail($id);
        $course->status = 'unpublish';
        $course->save();

        return redirect()->route('admincourse')->with('success', 'Program unpublished successfully');
    }

}
