<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminpeoplestaff()
    {
        $staff = Staff::all();
        return view('admin.people.staff')->with('staff', $staff);
    }

    
    public function showStaffInfor()
    {
        $staff = Staff::latest()
            ->where('status', 'published')
            ->get();

        $leftData = [];
        foreach ($staff as $key => $item) {
            $leftData[] = $item;
        }
        return $leftData;
    }

    public function showAllStaffData()
    {
        // Split the data into two arrays for left and right columns
        $staff = Staff::where('status', 'published')
            ->latest()
            ->get();
        // $rightData = [];
        // foreach ($projects as $key => $item) {
        //     $rightData[] = $item;
        // }
    
        return $staff;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.people.staff');
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
                Staff::create($requestdata);
                return redirect('/user/people/staff')->with('success', 'Staff member added successfully');
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
        $staff = Staff::findOrFail($id);
        return view('admin.people.updatestaff', compact('staff'));
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
    
            $staff = Staff::findOrFail($id);
    
            // Update employee data
            $staff->title = $request->input('title');
            $staff->firstname = $request->input('firstname');
            $staff->lastname = $request->input('lastname');
            $staff->email = $request->input('email');
            $staff->code = $request->input('code');
            $staff->telephone = $request->input('telephone');
            $staff->department = $request->input('department');
            $staff->faculty = $request->input('faculty');
            $staff->university = $request->input('university');
            $staff->profileurl = $request->input('profileurl');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('img', $fileName, 'public');
                $staff->image = '/storage/' . $path;
            }
    
            // Save the changes to the database
            $staff->save();
    
            return redirect()->route('adminpeoplestaff')->with('success', 'Staff updated successfully');
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
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('adminpeoplestaff')->with('success', 'Staff deleted successfully');
    }

    public function publish($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->status = 'published';
        $staff->save();

        return redirect()->route('adminpeoplestaff')->with('success', 'Staff published on web successfully');
    }

    public function unpublish($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->status = 'unpublish';
        $staff->save();

        return redirect()->route('adminpeoplestaff')->with('success', 'Staff unpublished successfully');
    }
}
