<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Research;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminresearch()
    {
        $research = Research::all();
        return view('admin.research')->with('research', $research);
    }

    public function showResearchData()
    {
        // Split the data into two arrays for left and right columns
        $latestResearch = Research::where('status', 'published')
            ->orderBy('rate', 'desc')
            ->latest()
            ->get();
        $rightData = [];
        foreach ($latestResearch as $key => $item) {
            $rightData[] = $item;
        }
    
        return $rightData;
    }

    public function showTotalPublishedResearchs()
    {
        $totalPublishedResearchs = Research::where('status', 'published')->count();
        return $totalPublishedResearchs;
    }

    public function getStatusOfResearch()
    {
        $publishedCount = Research::where('status', 'published')->count();
        $unpublishedCount = Research::where('status', '!=', 'published')->count();
        
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
        return view('user.researchadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate if a file is uploaded
            if ($request->hasFile('researchimage')) {
                $requestdata = $request->all();
                $fileName = time() . $request->file('researchimage')->getClientOriginalName();
                $path = $request->file('researchimage')->storeAs('img', $fileName, 'public');
                $requestdata['researchimage'] = '/storage/' . $path;
                Research::create($requestdata);
                return redirect()->back()->with('success', 'Research added successfully');
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
        $research = Research::findOrFail($id);
        return view('admin.updateresearch', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'researchtitle' => 'required|string|max:255',
                'researchername' => 'required|string|max:255',
                'instructer' => 'required|string|max:255',
                'otherresearchers' => 'required|string|max:255',
                'researchdate' => 'required|string|max:255',
                'issue' => 'required|string|max:255',
                'volume' => 'required|string|max:255',
                'pages' => 'required|string|max:255',
                'puburl' => 'required|string|max:255',
                'rate' => 'required|string|max:255',
                'description' => 'required|string',
                'researchimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $research = Research::findOrFail($id);
    
            // Update employee data
            $research->researchtitle = $request->input('researchtitle');
            $research->researchername = $request->input('researchername');
            $research->instructer = $request->input('instructer');
            $research->otherresearchers = $request->input('otherresearchers');
            $research->researchdate = $request->input('researchdate');
            $research->issue = $request->input('issue');
            $research->volume = $request->input('volume');
            $research->pages = $request->input('pages');
            $research->puburl = $request->input('puburl');
            $research->rate = $request->input('rate');
            $research->description = $request->input('description');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('researchimage')) {
                $fileName = time() . '.' . $request->file('researchimage')->getClientOriginalExtension();
                $path = $request->file('researchimage')->storeAs('img', $fileName, 'public');
                $research->researchimage = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $research->save();
    
            return redirect()->route('adminresearch')->with('success', 'Research updated successfully');
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
        $research = Research::findOrFail($id);
        $research->delete();

        return redirect()->route('adminresearch')->with('success', 'Research deleted successfully');
    }

    public function publish($id)
    {
        $research = Research::findOrFail($id);
        $research->status = 'published';
        $research->save();

        return redirect()->route('adminresearch')->with('success', 'Research published on web successfully');
    }

    public function unpublish($id)
    {
        $research = Research::findOrFail($id);
        $research->status = 'unpublish';
        $research->save();

        return redirect()->route('adminresearch')->with('success', 'Research unpublished successfully');
    }
}
