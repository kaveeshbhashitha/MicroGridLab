<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminproject()
    {
        $projects = Projects::all();
        return view('admin.projects')->with('projects', $projects);
    }

    public function showProjectData()
    {
        // Split the data into two arrays for left and right columns
        $projects = Projects::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()
            ->get();
        // $rightData = [];
        // foreach ($projects as $key => $item) {
        //     $rightData[] = $item;
        // }
    
        return $projects;
    }

    public function showAllProjectData()
    {
        // Split the data into two arrays for left and right columns
        $latestProject = Projects::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()
            ->get();
        $rightData = [];
        foreach ($latestProject as $key => $item) {
            $rightData[] = $item;
        }
    
        return $rightData;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.addproject');
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
                Projects::create($requestdata);
                return redirect()->back()->with('success', 'Project added successfully');
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
        $project = Projects::findOrFail($id);
        return view('admin.updateproject', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'projecttitle' => 'required|string|max:255',
                'studentname' => 'required|string|max:255',
                'instructer' => 'required|string|max:255',
                'othermembers' => 'required|string|max:255',
                'starteddate' => 'required|string|max:255',
                'endeddate' => 'required|string|max:255',
                'url' => 'required|string|max:255',
                'description' => 'required|string',
                'progress' => 'required|string|max:255',
                'estduration' => 'required|string|max:255',
                'client' => 'required|string|max:255',
                'budget' => 'required|string|max:255',
                'rate' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $project = Projects::findOrFail($id);
    
            // Update employee data
            $project->projecttitle = $request->input('projecttitle');
            $project->studentname = $request->input('studentname');
            $project->instructer = $request->input('instructer');
            $project->othermembers = $request->input('othermembers');
            $project->starteddate = $request->input('starteddate');
            $project->endeddate = $request->input('endeddate');
            $project->url = $request->input('url');
            $project->description = $request->input('description');
            $project->progress = $request->input('progress');
            $project->estduration = $request->input('estduration');
            $project->client = $request->input('client');
            $project->budget = $request->input('budget');
            $project->rate = $request->input('rate');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('img', $fileName, 'public');
                $project->image = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $project->save();
    
            return redirect()->route('adminproject')->with('success', 'project updated successfully');
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
        $project = Projects::findOrFail($id);
        $project->delete();

        return redirect()->route('adminproject')->with('success', 'Project deleted successfully');
    }

    public function publish($id)
    {
        $project = Projects::findOrFail($id);
        $project->status = 'published';
        $project->save();

        return redirect()->route('adminproject')->with('success', 'Project published on web successfully');
    }

    public function unpublish($id)
    {
        $project = Projects::findOrFail($id);
        $project->status = 'unpublish';
        $project->save();

        return redirect()->route('adminproject')->with('success', 'Project unpublished successfully');
    }
}
