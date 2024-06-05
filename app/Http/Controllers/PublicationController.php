<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminpublish()
    {
        $publication = Publication::all();
        return view('admin.publication')->with('publication', $publication);
    }

    public function showPublicationhData()
    {
        // Split the data into two arrays for left and right columns
        $latestPublication = Publication::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()
            ->get();
        $rightData = [];
        foreach ($latestPublication as $key => $item) {
            $rightData[] = $item;
        }
        return $rightData;
    }

    public function showTotalPublishedPublications()
    {
        $totalPublishedPublication = Publication::where('status', 'published')->count();
        return $totalPublishedPublication;
    }
    

    public function getStatusOfPublication()
    {
        $publishedCount = Publication::where('status', 'published')->count();
        $unpublishedCount = Publication::where('status', '!=', 'published')->count();
        
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
        return view('user.publicationadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate if a file is uploaded
            if ($request->hasFile('pubimage')) {
                $requestdata = $request->all();
                $fileName = time() . $request->file('pubimage')->getClientOriginalName();
                $path = $request->file('pubimage')->storeAs('img', $fileName, 'public');
                $requestdata['pubimage'] = '/storage/' . $path;
                Publication::create($requestdata);
                return redirect()->back()->with('success', 'Publication added successfully');
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
        $publication = Publication::findOrFail($id);
        return view('admin.updatepublication', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'pubtitle' => 'required|string|max:255',
                'puburl' => 'required|string|max:255',
                'rate' => 'required|string|max:255',
                'description' => 'required|string',
                'pubimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $publication = Publication::findOrFail($id);
    
            // Update employee data
            $publication->pubtitle = $request->input('pubtitle');
            $publication->puburl = $request->input('puburl');
            $publication->rate = $request->input('rate');
            $publication->description = $request->input('description');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('pubimage')) {
                $fileName = time() . '.' . $request->file('pubimage')->getClientOriginalExtension();
                $path = $request->file('pubimage')->storeAs('img', $fileName, 'public');
                $publication->pubimage = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $publication->save();
    
            return redirect()->route('adminpublish')->with('success', 'Publication updated successfully');
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
        $publication = Publication::findOrFail($id);
        $publication->delete();

        return redirect()->route('adminpublish')->with('success', 'Publication deleted successfully');
    }

    public function publish($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->status = 'published';
        $publication->save();

        return redirect()->route('adminpublish')->with('success', 'Publication published on web successfully');
    }

    public function unpublish($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->status = 'unpublish';
        $publication->save();

        return redirect()->route('adminpublish')->with('success', 'Publication unpublished successfully');
    }
}
