<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Userモデルを使って、全ユーザーデータを取得
        $users = User::all();
        // viewの呼び出し
        return view('users.index', compact('users'));
    }    

   
    public function show(User $user)
    {
       // view の呼び出し
        return view('users.show', compact('user'));    
        
    }
}