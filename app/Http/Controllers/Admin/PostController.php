<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\View\Components\ActionButtons;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = Post::select(['id', 'name', 'photo','desc']);
            return Datatables::of($data)
                ->addColumn('photo', function ($row) {
                    $photoUrl = asset( $row->photo);
                    return '<img src="'.$photoUrl.'" alt="Photo" width="100" height="100" class="img-thumbnail">';
                })
                ->addColumn('desc', function ($row) {
                    return '<span title="'.$row->desc.'">'.Str::limit($row->desc, 15).'</span>';
                })

                ->addColumn('action', function ($row) {
                    return view('components.action-buttons', [
                        'id' => $row->id,
                        'editRoute' => 'post.edit',
                        'deleteRoute' => 'post.destroy',
                    ])->render();
                })
                ->rawColumns(['photo','desc', 'action'])
                ->make(true);
        }

        return view('admin.post.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required|string|max:255',
                'photo' => 'mimes:png,jpg,jpeg,webp',
                'desc' => 'required|string',
            ]);

            $post = Post::create([
                'name' => $request->name,
                'desc' => $request->desc,
            ]);

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(300, 300)->save('upload/post/' . $name_gen);
                $save_url = 'upload/post/' . $name_gen;
                $post->update(['photo' => $save_url]);
            }


            flash()->success('Post created successfully');
            return redirect()->route('post.index');
        } catch (\Exception $e) {

            flash()->error('Appointment created successfully');
            return redirect()->back();
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
        $data = Post::find($id);

        return view('admin.post.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            $post = Post::find($id);
            $request->validate([
                'name' => 'required|string|max:255',
                'photo' => 'mimes:png,jpg,jpeg,webp',
                'desc' => 'required|string',
            ]);



            $post->update([
                'name' => $request->name,
                'desc' => $request->desc,
            ]);

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                if ($post->photo != null) {
                    $old_image = $post->photo;
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
                }
                $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(300, 300)->save('upload/user/' . $name_gen);
                $save_url = 'upload/post/' . $name_gen;
                $post->update(['photo' => $save_url]);
            }
            $post->save();

            flash()->success('Post Updated successfully');

            return redirect()->route('post.index')->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {

            flash()->error('Error updating blog: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
