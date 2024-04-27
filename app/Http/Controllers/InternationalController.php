<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\International;

class InternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminpeopleinternational()
    {
        $international = International::all();
        return view('admin.people.international')->with('international', $international);
    }

    public function getLatestInternation()
    {
        $latestInternational = International::latest()
            ->where('status', 'published')
            ->first();

        return $latestInternational;
    }

    public function showInternationalInCaro()
    {
        $inters = International::latest()
            ->where('status', 'published')
            ->take(5)
            ->get();

        $leftData = [];
        foreach ($inters as $key => $item) {
            $leftData[] = $item;
        }
        return $leftData;
    }
    

    public function showFiveInternationals()
    {
        $fiveinternationals = International::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()
            ->take(5)
            ->get(['image', 'profileurl', 'title', 'firstname']);

        return $fiveinternationals;
    }

    public function showTotalPublishedInternationals()
    {
        $totalPublishedInternationals = International::where('status', 'published')->count();
        return $totalPublishedInternationals;
    }

    public function getStatusOfInternational()
    {
        $publishedCount = International::where('status', 'published')->count();
        $unpublishedCount = International::where('status', '!=', 'published')->count();
        
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
        return view('user.people.international');
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
                International::create($requestdata);
                return redirect('/user/people/international')->with('success', 'International partner added successfully');
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
        $international = International::findOrFail($id);
        return view('admin.people.updateinternational', compact('international'));
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
                'country' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'faculty' => 'required|string|max:255',
                'university' => 'required|string|max:255',
                'rate' => 'required|string|max:255',
                'profileurl' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $international = International::findOrFail($id);
    
            // Update employee data
            $international->title = $request->input('title');
            $international->firstname = $request->input('firstname');
            $international->lastname = $request->input('lastname');
            $international->email = $request->input('email');
            $international->country = $request->input('country');
            $international->department = $request->input('department');
            $international->faculty = $request->input('faculty');
            $international->university = $request->input('university');
            $international->rate = $request->input('rate');
            $international->profileurl = $request->input('profileurl');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('img', $fileName, 'public');
                $international->image = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $international->save();
    
            return redirect()->route('adminpeopleinternational')->with('success', 'International partner updated successfully');
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
        $international = International::findOrFail($id);
        $international->delete();

        return redirect()->route('adminpeopleinternational')->with('success', 'International partner deleted successfully');
    }

    public function publish($id)
    {
        $international = International::findOrFail($id);
        $international->status = 'published';
        $international->save();

        return redirect()->route('adminpeopleinternational')->with('success', 'International partner published on web successfully');
    }

    public function unpublish($id)
    {
        $international = International::findOrFail($id);
        $international->status = 'unpublish';
        $international->save();

        return redirect()->route('adminpeopleinternational')->with('success', 'International partner unpublished successfully');
    }
}
