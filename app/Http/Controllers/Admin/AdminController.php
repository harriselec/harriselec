<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}