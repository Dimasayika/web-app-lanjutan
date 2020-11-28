<?php

namespace App\Http\Controllers;

class satuController extends Controller
{
    public function satu()
    {
        return view("view-1");
    }

    public function index()
    {
        return view("testing-tema"); //view dengan template
    }

    public function dua()
    {
        return view("view-2");
    }
    public function tiga()
    {
        return view("view-3");
    }
}