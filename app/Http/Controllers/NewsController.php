<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminnews()
    {
        $news = News::all();
        return view('admin.news')->with('news', $news);
    }

    public function showNewsData()
    {
        // Split the data into two arrays for left and right columns
        $latestNews = News::latest()->where('status', 'published')->get();
        $rightData = [];
        foreach ($latestNews as $key => $item) {
            $rightData[] = $item;
        }
        return $rightData;
    }

    public function showFiveNews()
    {
        $fiveNews = News::latest()
            ->where('status', 'published')
            ->take(5)
            ->get();

        $leftData = [];
        foreach ($fiveNews as $key => $item) {
            $leftData[] = $item;
        }
        return $leftData;
    }

    public function getStatusOfNews()
    {
        $publishedCount = News::where('status', 'published')->count();
        $unpublishedCount = News::where('status', '!=', 'published')->count();
        
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
        return view('user.newsadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate if a file is uploaded
            if ($request->hasFile('newsimage')) {
                $requestdata = $request->all();
                $fileName = time() . $request->file('newsimage')->getClientOriginalName();
                $path = $request->file('newsimage')->storeAs('img', $fileName, 'public');
                $requestdata['newsimage'] = '/storage/' . $path;
                News::create($requestdata);
                return redirect()->back()->with('success', 'News added successfully');
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
        $news = News::findOrFail($id);
        return view('admin.updatenews', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'newstitle' => 'required|string|max:255',
                'newsurl' => 'required|string|max:255',
                'news' => 'required|string',
                'newsdate' => 'required|string|max:255',
                'newsimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
    
            $news = News::findOrFail($id);
    
            // Update employee data
            $news->newstitle = $request->input('newstitle');
            $news->newsurl = $request->input('newsurl');
            $news->news = $request->input('news');
            $news->newsdate = $request->input('newsdate');
    
            // Check if a new photo has been uploaded
            if ($request->hasFile('newsimage')) {
                $fileName = time() . '.' . $request->file('newsimage')->getClientOriginalExtension();
                $path = $request->file('newsimage')->storeAs('img', $fileName, 'public');
                $news->newsimage = '/storage/' . $path;
            }
            else {
                // Handle case where no file is uploaded
                return redirect()->back()->with('error', 'Please upload a photo');
            }
    
            // Save the changes to the database
            $news->save();
    
            return redirect()->route('adminnews')->with('success', 'News updated successfully');
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
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('adminnews')->with('success', 'News deleted successfully');
    }

    public function publish($id)
    {
        $news = News::findOrFail($id);
        $news->status = 'published';
        $news->save();

        return redirect()->route('adminnews')->with('success', 'News published on web successfully');
    }

    public function unpublish($id)
    {
        $news = News::findOrFail($id);
        $news->status = 'unpublish';
        $news->save();

        return redirect()->route('adminnews')->with('success', 'News unpublished successfully');
    }
}
