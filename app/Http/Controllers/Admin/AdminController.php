<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function toggleUserStatus($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->status = $user->status == 1 ? 0 : 1;
            $user->save();

            $notification = [
                'message' => 'Status updated successfully',
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($notification);
        } catch (\Throwable $th) {

            $notification = [
                'message' => $th->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->back()->with($notification);
        }
    }


}
