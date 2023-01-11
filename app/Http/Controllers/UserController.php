<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {

        return view('layouts/users');
        // 1. Using raw SQL queries
        // $users = DB::select('select * from users');
        // 2. Query Builder
        // $users = DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name)')->get();
        // dd($users);
        // 3. Eloquent ORM
    }

    public function create() {

    }

    public function store() {

    }

    public function show() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {
        
    }
}
