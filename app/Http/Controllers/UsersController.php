<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Articles;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function login_form()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $users = Users::where('username', $request->username)->first();
        
        if ($users == null) {
            return redirect()->back()->with('error', 'username tidak ditemukan 🤯');
        }

        $db_password = $users->password;
        $hashed_password = Hash::check($request->password, $db_password);

        if ($hashed_password) {
            $users->token = Str::random(20);
            $users->save();
            $request->session()->put('token', $users->token);
            return to_route('dashboard_index');
        } else {
            return redirect()->back()->with('error', 'maaf data anda tidak sesuai 😈');
        }
    }

    public function register_form()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'username'=> ['required'],
            'password'=> ['required'],
        ]);
        $users = new Users([
            'username' => $request->username,
            'password' =>Hash::make($request->password),
        ]);
        $users->save();
        return redirect()->route('login_form')->with('success', 'Registrasi Berhasil. Silahkan Login!');
    }

    public function dashboard_index()
    {
        if (Session::has('token')) {
            $users = Users::where('token', Session::get('token'))->first();
            $articles = Articles::get();
            return view('Dashboard/index', [
                "title" => "DASHBOARD ADMIN",
                "users" => $users,
                "articles" => $articles
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function dashboard_logout(Request $request)
    {
        Users::where('token', $request->token)->update([
            'token' => NULL
        ]);

        Session::pull('token');
        return to_route('login_form');
    }
    
    public function article_delete_action(Request $request)
    {
        Articles::find($request->id)->delete();
        return redirect()->back()->with('message', 'artikel berhasil dihapus');
    }

    public function article_add_action(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required', 'max:255', 'min:10'],
            'tag' => ['nullable'],
        ]);

        $created = Articles::create([
            "title" => $request->title,  
            "description" => $request->description,  
            "tag" => $request->tag,  
        ]);
        if($created){
            return redirect()->back()->with('message', 'artikel berhasil dibuat');
        }else{
            return redirect()->back()->with('message', 'artikel gagal dibuat');
        }
    }

    public function article_edit_action($title)
    {
        $users = Users::firstWhere('token', Session::get('token'));
        $update = Articles::firstWhere('title', $title);
        return view('Dashboard/edit', [
            "users" => $users,
            "update" => $update,
        ]);
        return view('dashboard/edit');
    }

    public function article_update_action(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required', 'max:255', 'min:10'],
            'tag' => ['nullable'],
        ]);

    //     $updated = Articles::where ('id', $id)
    //     ->update(['title' => $request->title,
    // 'description' => $request->description,
    // 'tag' => $request->tag,
    // ]);

        $updated = Articles::find($id);
        $updated->title= $request->title;
        $updated->description = $request->description;
        $updated->tag = $request->tag;
        $updated->save();
        if($updated){
            return to_route('dashboard_index')->with('message', 'artikel berhasil diedit');
        }else{
            return redirect()->back()->with('message', 'artikel gagal dibuat');
        }
    }
}