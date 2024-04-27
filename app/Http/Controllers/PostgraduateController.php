<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postgraduate;

class PostgraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminpeoplepostgraduate()
    {
        $postgraduate = Postgraduate::all();
        return view('admin.people.postgraduate')->with('postgraduate', $postgraduate);
    }

    public function showEightPostgraduates()
    {
        // Array of icon classes
        $icons = [
            'fas fa-bolt',            
            'fas fa-lightbulb',       
            'fas fa-plug',           
            'fas fa-charging-station',
            'fas fa-solar-panel',     
            'fas fa-wind',           
            'fas fa-cogs',            
            'fas fa-brain',           
        ];
        
        // Shuffle the array to ensure random order
        shuffle($icons);

        // Retrieve the latest 8 records
        $eightSetpostgraduatess = Postgraduate::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()    
            ->take(3)
            ->get(
                ['title',
                'firstname',
                'lastname',
                'email',
                'degree',
                'studyarea',
                'startedyear',
                'endedyear',
                'profileurl',
                'status']
            );

        // Iterate over the records and assign an icon to each
        $eightSetpostgraduatess->each(function ($item, $key) use ($icons) {
            // Ensure icon index does not exceed array length
            $iconIndex = $key % count($icons);
            $item->icon = $icons[$iconIndex];
        });

        return $eightSetpostgraduatess;
    }

    public function showAllPostgraduates()
    {
        // Array of icon classes
        $icons = [
            'fas fa-bolt',            
            'fas fa-lightbulb',       
            'fas fa-plug',           
            'fas fa-charging-station',
            'fas fa-solar-panel',     
            'fas fa-wind',           
            'fas fa-cogs',            
            'fas fa-brain',           
        ];
        
        // Shuffle the array to ensure random order
        shuffle($icons);

        // Retrieve the latest 8 records
        $allPostgraduates = Postgraduate::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()  
            ->get(
                ['title',
                'firstname',
                'lastname',
                'email',
                'degree',
                'studyarea',
                'startedyear',
                'endedyear',
                'profileurl',
                'status']
            );

        // Iterate over the records and assign an icon to each
        $allPostgraduates->each(function ($item, $key) use ($icons) {
            // Ensure icon index does not exceed array length
            $iconIndex = $key % count($icons);
            $item->icon = $icons[$iconIndex];
        });

        return $allPostgraduates;
    }

    public function showFourPostgraduates()
    {
        // Array of icon classes
        $icons = [
            'fas fa-bolt',            
            'fas fa-lightbulb',       
            'fas fa-plug',           
            'fas fa-charging-station',
            'fas fa-solar-panel',     
            'fas fa-wind',           
            'fas fa-cogs',            
            'fas fa-brain',           
        ];
        
        // Shuffle the array to ensure random order
        shuffle($icons);

        // Retrieve the latest 8 records
        $fourSetpostgraduatess = Postgraduate::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()
            ->take(4)
            ->get(
                ['title',
                'firstname',
                'lastname',
                'email',
                'degree',
                'studyarea',
                'startedyear',
                'endedyear',
                'profileurl',
                'status']
            );

        // Iterate over the records and assign an icon to each
        $fourSetpostgraduatess->each(function ($item, $key) use ($icons) {
            // Ensure icon index does not exceed array length
            $iconIndex = $key % count($icons);
            $item->icon = $icons[$iconIndex];
        });

        return $fourSetpostgraduatess;
    }

    public function showTotalPublishedPostgraduates()
    {
        $totalPublishedPostgraduates = Postgraduate::where('status', 'published')->count();
        return $totalPublishedPostgraduates;
    }

    public function getStatusOfPostgraduate()
    {
        $publishedCount = Postgraduate::where('status', 'published')->count();
        $unpublishedCount = Postgraduate::where('status', '!=', 'published')->count();
        
        return [
            'publishedCount' => $publishedCount,
            'unpublishedCount' => $unpublishedCount
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.people.postgraduate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $requestdata = $request->all();
            Postgraduate::create($requestdata);
            return redirect('/user/people/postgraduate')->with('success', 'Postgraduate added successfully');

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
        $postgraduate = Postgraduate::findOrFail($id);
        return view('admin.people.updatepostegraduate', compact('postgraduate'));
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
                'rate' => 'required|string|max:255',
                'profileurl' => 'required|string|max:255',
            ]);
    
            $postgraduate = Postgraduate::findOrFail($id);
    
            // Update employee data
            $postgraduate->title = $request->input('title');
            $postgraduate->firstname = $request->input('firstname');
            $postgraduate->lastname = $request->input('lastname');
            $postgraduate->email = $request->input('email');
            $postgraduate->degree = $request->input('degree');
            $postgraduate->studyarea = $request->input('studyarea');
            $postgraduate->startedyear = $request->input('startedyear');
            $postgraduate->endedyear = $request->input('endedyear');
            $postgraduate->rate = $request->input('rate');
            $postgraduate->profileurl = $request->input('profileurl');
    
            // Save the changes to the database
            $postgraduate->save();
    
            return redirect()->route('adminpeoplepostgraduate')->with('success', 'Postgraduate student updated successfully');
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
        $postgraduate = Postgraduate::findOrFail($id);
        $postgraduate->delete();

        return redirect()->route('adminpeoplepostgraduate')->with('success', 'Postgraduate student deleted successfully');
    }

    public function publish($id)
    {
        $postgraduate = Postgraduate::findOrFail($id);
        $postgraduate->status = 'published';
        $postgraduate->save();

        return redirect()->route('adminpeoplepostgraduate')->with('success', 'Postgraduate student published on web successfully');
    }

    public function unpublish($id)
    {
        $postgraduate = Postgraduate::findOrFail($id);
        $postgraduate->status = 'unpublish';
        $postgraduate->save();

        return redirect()->route('adminpeoplepostgraduate')->with('success', 'Postgraduate student unpublished successfully');
    }
}
