<?php
namespace App\Http\Controllers;

use App\Models\Alumni;


class ManageController extends Controller
{
     public function manageAlumni()
    {
        $alumni = Alumni::orderBy('created_at', 'desc')->get();
        return view('manageAlumni', ['alumni' => $alumni]);
    }
}
