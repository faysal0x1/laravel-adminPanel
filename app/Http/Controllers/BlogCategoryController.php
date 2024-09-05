<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = BlogCategory::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Custom method to show same catagory blogs in Blog page.
     */
    /**
     * Custom method to show blogs of a specific category in the Blog page.
     */
    public function categoryShow(Request $request)
    {
        $categories = BlogCategory::all();
        $categorySlug = $request->query('cat');
        $category = BlogCategory::where('slug', $categorySlug)->first();
        if (!$category) {
            return redirect()->back()->withErrors(['msg' => 'Category not found']);
        }
        $blogs = $category->blogs()->paginate(9);
        $blogs->withPath('/blog/category?cat='.$categorySlug);
        $requestedPage = $request->query('page', 1);
        if ($requestedPage > $blogs->lastPage()) {
            return redirect()->route('website.catBlog', ['cat' => $categorySlug, 'page' => $blogs->lastPage()]);
        }
        return view('website.blog', compact('blogs','categories','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cache::forget('blog_categories');
        try{
            $validate = $request->validate([
                'name' => 'required|string|max:100',
                'slug' => 'required|string|max:100',
            ]);
            BlogCategory::create($validate);
            return redirect()->route('admin.categories')->with('success', 'New Blog Category created successfully.');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('error', 'Error Creating blog category: ' . $e->getMessage());
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
    public function edit(BlogCategory $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $category)
    {
        Cache::forget('blog_categories');
        try{
            $validate = $request->validate([
                'name' => 'sometimes|required|string|max:100',
                'slug' => 'sometimes|required|string|max:100',
            ]);

            $category->update($validate);

            return redirect()->route('admin.categories')->with('success', 'Blog Category Updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('error', 'Error updating blog category: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cache::forget('blog_categories');
        try {
            $categories = BlogCategory::findOrFail($id);
            $categories->delete();

            return back()->with('success', 'Blog Category Deleted successfully.');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('error', 'Error deleting blog category: ' . $e->getMessage());
        }
    }
}
