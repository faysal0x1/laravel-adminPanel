<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'rating' => 'sometimes|required|integer',
                'desc' => 'required|string',
                'position' => 'required|string|max:255',
            ]);
    
            $testimonial = Testimonial::create($validate);
    
            return  redirect()->route('admin.testimonials')->with('success', 'New Testimonial created successfully.');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('error', 'Error creating Testimonial: ' . $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        try{
            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'rating' => 'sometimes|required|integer',
                'desc' => 'required|string',
                'position' => 'required|string|max:255',
            ]);
    
            $testimonial->update($validate);
    
            return  redirect()->route('admin.testimonials')->with('success', 'Testimonial Updated successfully.');
            
        } catch (\Exception $e) {
            dd($e);
            return back()->with('error', 'Error updating Testimonial: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->delete();

            return back()->with('success', 'Testimonial Deleted successfully.');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('error', 'Error deleting Testimonial: ' . $e->getMessage());
        }
    }
}
