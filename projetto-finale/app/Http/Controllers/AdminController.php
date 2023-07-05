<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminRequests = User::where('is_admin', Null)->get();
        $revisorRequests = User::where('is_revisor', Null)->get();
        $writerRequests = User::where('is_writer', Null)->get();

        return view('admin.dashboard',compact('adminRequests', 'revisorRequests', 'writerRequest'));
    }
    public function makeUserAdmin(User $user)
    {
        $user->is_admin = true;
        $user->save();
        return redirect()->route('admin.dashboard');

    }
    public function makeUserRevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }
    public function makeUserWriter(User $user)
    {
        $user->is_writer = true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }
    //
}
