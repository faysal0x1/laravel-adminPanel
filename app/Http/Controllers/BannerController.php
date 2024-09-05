<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return response()->json($banners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validate = $request->validate([
                'title' => 'required|string|max:255',
                'short_title' => 'required|string|max:100',
                'btn_text' => 'required|string',
                'btn_link' => 'required|string',
            ]);
    
            $banner = Banner::create($validate);
    
            return  back()->with('success', 'New Banner created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error creating Banner: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $banner = Banner::findOrFail($id);
        return response()->json($banner);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validate = $request->validate([
                'title' => 'required|string|max:255',
                'short_title' => 'required|string|max:100',
                'btn_text' => 'required|string',
                'btn_link' => 'required|string',
            ]);
    
            $banner = Banner::findOrFail($id);
            $banner->update($validate);
    
            return back()->with('success', 'Banner Updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error Uupdating Banner: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $banner = Banner::findOrFail($id);
            $banner->delete();

            return back()->with('success', 'Banner Deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting Banner: ' . $e->getMessage());
        }
    }
}
