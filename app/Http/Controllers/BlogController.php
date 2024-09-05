<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $categories = Cache::remember('blog_categories', now()->addMinutes(2), function () {
            return BlogCategory::all();
        });
        $blogs = Blog::with(['blogCategory', 'user'])->paginate(9);
        $requestedPage = $request->query('page', 1);
        if ($requestedPage > $blogs->lastPage()) {
            return redirect()->route('website.blog', ['page' => $blogs->lastPage()]);
        }
        return view('website.blog', compact('blogs', 'categories'));
    }
    public function adminIndex()
    {
        $blogs = Blog::with(['blogCategory', 'user'])->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        $users = User::all();
        return view('admin.blog.add', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'blog_category_id' => 'required',
                'created_by' => 'required',
                'name' => 'required|string|max:255',
                'photo' => 'mimes:png,jpg,jpeg,webp',
                'desc' => 'required|string',
            ]);
            if ($request->has('photo')) {
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $newName = time() . '.' . $ext;
                $location = public_path('blogPhotos');
                $file->move($location, $newName);

                $blog = Blog::create([
                    'blog_category_id' => $request->blog_category_id,
                    'created_by' => $request->created_by,
                    'name' => $request->name,
                    'photo' => $newName,
                    'desc' => $request->desc,
                ]);
            } else {
                $blog = Blog::create([
                    'blog_category_id' => $request->blog_category_id,
                    'created_by' => $request->created_by,
                    'name' => $request->name,
                    'desc' => $request->desc,
                ]);
            }



            return view('website.blog-view', compact('blog'))->with('success', 'Blog Created successfully.');
            // return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Error creating Blog: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('website.blog-view', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        $users = User::all();
        //for drop down editing
        return view('admin.blog.edit', compact('blog', 'categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        try {
            $request->validate([
                'blog_category_id' => 'required',
                'created_by' => 'required',
                'name' => 'required|string|max:255',
                'photo' => 'mimes:png,jpg,jpeg,webp',
                'desc' => 'required|string',
            ]);

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $newName = time() . '.' . $ext;
                $location = public_path('blogPhotos');
                $file->move($location, $newName);
            } else {
                $newName = $blog->photo;
            }

            $blog->update([
                'blog_category_id' => $request->blog_category_id,
                'created_by' => $request->created_by,
                'name' => $request->name,
                'photo' => $newName,
                'desc' => $request->desc,
            ]);
            $blog->save();
            return view('website.blog-view', compact('blog'))->with('success', 'Blog updated successfully.');

            // return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Error updating Blog: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {
            $blog->delete();
            return redirect()->back()->with('success', 'Blog deleted successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Error deleting Blog: ' . $e->getMessage());
        }
    }
}
