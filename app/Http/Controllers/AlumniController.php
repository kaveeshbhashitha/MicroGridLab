<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminpeoplealumni()
    {
        $alumni = Alumni::all();
        return view('admin.people.alumni')->with('alumni', $alumni);
    }

    public function showEightAlumnis()
    {
        $eightSetAlumnis = Alumni::where('status', 'published')
            ->orderBy('rate', 'desc') // Sort by rate column in descending order
            ->take(8)
            ->latest()
            ->get([
                'title',
                'firstname',
                'lastname',
                'email',
                'degree',
                'studyarea',
                'startedyear',
                'endedyear',
                'profileurl',
                'puburl',
                'alumniimage',
                'status',
                'rate' // Include the rate column
            ]);

        return $eightSetAlumnis;
    }

    public function showFourAlumnis()
    {
        $fourSetAlumnis = Alumni::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->take(4)
            ->latest()
            ->get([
                'title',
                'firstname',
                'lastname',
                'email',
                'degree',
                'studyarea',
                'startedyear',
                'endedyear',
                'profileurl',
                'puburl',
                'alumniimage',
                'rate',
                'status'
            ]);

        return $fourSetAlumnis;
    }

    public function showTotalPublishedAlumnis()
    {
        $totalPublishedAlumnis = Alumni::where('status', 'published')->count();
        return $totalPublishedAlumnis;
    }

    public function getStatusOfAlumnis()
    {
        $publishedCount = Alumni::where('status', 'published')->count();
        $unpublishedCount = Alumni::where('status', '!=', 'published')->count();
        
        return [
            'publishedCount' => $publishedCount,
            'unpublishedCount' => $unpublishedCount
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userpeoplealumni()
    {
        return view('user.people.alumni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate if a file is uploaded
            if ($request->hasFile('alumniimage')) {
                $requestdata = $request->all();
                $fileName = time() . $request->file('alumniimage')->getClientOriginalName();
                $path = $request->file('alumniimage')->storeAs('img', $fileName, 'public');
                $requestdata['alumniimage'] = '/storage/' . $path;
                Alumni::create($requestdata);
                return redirect('/user/people/alumni')->with('success', 'Alumni added successfully');
            } else {
                // Handle case where no file is uploaded
                return redirect()->back()->with('error', 'Please upload a photo');
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
        $alumni = Alumni::findOrFail($id);
        return view('admin.people.updatealumni', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'degree' => 'required|string|max:255',
                'studyarea' => 'required|string|max:255',
                'startedyear' => 'required|string|max:255',
                'endedyear' => 'required|string|max:255',
                'profileurl' => 'required|string|max:255',
                'puburl' => 'required|string|max:255',
                'rate' => 'required|string|max:255',
                'alumniimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $alumni = Alumni::findOrFail($id);
    
            // Update employee data
            $alumni->title = $request->input('title');
            $alumni->firstname = $request->input('firstname');
            $alumni->lastname = $request->input('lastname');
            $alumni->email = $request->input('email');
            $alumni->degree = $request->input('degree');
            $alumni->studyarea = $request->input('studyarea');
            $alumni->startedyear = $request->input('startedyear');
            $alumni->endedyear = $request->input('endedyear');
            $alumni->rate = $request->input('rate');
            $alumni->puburl = $request->input('puburl');
            $alumni->profileurl = $request->input('profileurl');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('alumniimage')) {
                $fileName = time() . '.' . $request->file('alumniimage')->getClientOriginalExtension();
                $path = $request->file('alumniimage')->storeAs('img', $fileName, 'public');
                $alumni->alumniimage = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $alumni->save();
    
            return redirect()->route('adminpeoplealumni')->with('success', 'Alumni updated successfully');
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
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('adminpeoplealumni')->with('success', 'Alumni deleted successfully');
    }

    public function publish($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->status = 'published';
        $alumni->save();

        return redirect()->route('adminpeoplealumni')->with('success', 'Alumni published on web successfully');
    }

    public function unpublish($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->status = 'unpublish';
        $alumni->save();

        return redirect()->route('adminpeoplealumni')->with('success', 'Alumni unpublished successfully');
    }
}
