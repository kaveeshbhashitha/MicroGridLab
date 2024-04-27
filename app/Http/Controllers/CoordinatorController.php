<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinator;

class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminpeoplecoordinator()
    {
        $coordinator = Coordinator::all();
        return view('admin.people.coordinator')->with('coordinator', $coordinator);
    }

    //function to return latest coordinator
    public function getLatestCoordinator()
    {
        $latestCoordinator = Coordinator::latest()->where('status', 'published')->first();
        return $latestCoordinator;
    }

    public function getStatusOfCoordinator()
    {
        $publishedCount = Coordinator::where('status', 'published')->count();
        $unpublishedCount = Coordinator::where('status', '!=', 'published')->count();
        
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
        return view('user.people.coordinator');
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
                Coordinator::create($requestdata);
                return redirect('/user/people/coordinator')->with('success', 'Coordinator added successfully');
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
        $coordinator = Coordinator::findOrFail($id);
        return view('admin.people.updatecoordinator', compact('coordinator'));
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
                'code' => 'required|string|max:255',
                'telephone' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'faculty' => 'required|string|max:255',
                'university' => 'required|string|max:255',
                'profileurl' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $coordinator = Coordinator::findOrFail($id);
    
            // Update employee data
            $coordinator->title = $request->input('title');
            $coordinator->firstname = $request->input('firstname');
            $coordinator->lastname = $request->input('lastname');
            $coordinator->email = $request->input('email');
            $coordinator->code = $request->input('code');
            $coordinator->telephone = $request->input('telephone');
            $coordinator->department = $request->input('department');
            $coordinator->faculty = $request->input('faculty');
            $coordinator->university = $request->input('university');
            $coordinator->profileurl = $request->input('profileurl');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('img', $fileName, 'public');
                $coordinator->image = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $coordinator->save();
    
            return redirect()->route('adminpeoplecoordinator')->with('success', 'Coordinator updated successfully');
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
        $coordinator = Coordinator::findOrFail($id);
        $coordinator->delete();

        return redirect()->route('adminpeoplecoordinator')->with('success', 'Coordinator deleted successfully');
    }

    public function publish($id)
    {
        $coordinator = Coordinator::findOrFail($id);
        $coordinator->status = 'published';
        $coordinator->save();

        return redirect()->route('adminpeoplecoordinator')->with('success', 'Coordinator published on web successfully');
    }

    public function unpublish($id)
    {
        $coordinator = Coordinator::findOrFail($id);
        $coordinator->status = 'unpublish';
        $coordinator->save();

        return redirect()->route('adminpeoplecoordinator')->with('success', 'Coordinator unpublished successfully');
    }
}
