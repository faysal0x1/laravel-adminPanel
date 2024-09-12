<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Contracts\DataTable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::get();

            return DataTables::of($data)
                ->addColumn('status', function ($row) {
                    return view('components.status-toggle', [
                        'id' => $row->id,
                        'model' => 'user',
                        'status' => $row->status
                    ])->render();
                })
                ->addColumn('action', function ($row) {
                    return view('components.action-buttons', [
                        'id' => $row->id,
                        'editRoute' => 'user.edit',
                        'deleteRoute' => 'user.destroy',
                    ])->render();
                })
                ->rawColumns(['action', 'status'])

                ->make(true);
        }



        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'age' => $request->age,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => bcrypt($request->password),
            ]);

            if ($request->roles) {
                foreach ($request->roles as $role) {
                    $user->addRole($role);
                }
            }

            // Upload Photo

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(300, 300)->save('upload/user/' . $name_gen);
                $save_url = 'upload/user/' . $name_gen;
                $user->update(['photo' => $save_url]);
            }


            return redirect()->back()->with('success', 'User created successfully');
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $user = User::whereId($id)->firstOrFail();

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,

            ]);

            if ($request->has('roles')) {
                $user->removeRoles(); // Detach all roles first
                foreach ($request->roles as $roleName) {
                    $role = Role::where('name', $roleName)->first();
                    if ($role) {
                        $user->addRole($role);
                    }
                }
            }

            if ($request->password) {
                $user->update(['password' => bcrypt($request->password)]);
            }


            // Upload Photo

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                if (file_exists($user->photo)) {
                    unlink($user->photo);
                }
                $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(300, 300)->save('upload/user/' . $name_gen);
                $save_url = 'upload/user/' . $name_gen;
                $user->update(['photo' => $save_url]);
            }

            // Send welcome email
            //  Mail::to($user->email)->send(new WelcomeUserMail($user));

            return redirect()->back()->with('success', 'Doctor updated successfully');
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            // Remove user's roles
            $user->syncRoles([]);

            // Delete user's photo if it exists
            if ($user->photo) {
                $old_image = public_path($user->photo);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }

            $user->delete();

            if ($request->ajax()) {
                return response()->json(['success' => true, 'message' => 'User deleted successfully']);
            }

            flash('success', 'User deleted successfully');
            return redirect()->route('admin.user.index');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json(['success' => false, 'message' => 'User not deleted successfully: ' . $e->getMessage()], 500);
            }

            flash('error', 'User not deleted successfully: ' . $e->getMessage());
            return redirect()->route('admin.user.index');
        }
    }
}
