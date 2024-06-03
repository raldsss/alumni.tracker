<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade for database operations

class AlumniController extends Controller
{
        public function manageAlumni(Request $request)
    {

        $request->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'streetAddress' => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'district' => 'required',
            'province' => 'required',
            'region' => 'required',
            'birthdate' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'nationality' => 'required',
            'civil_status' => 'required',
            'email' => 'required|email',
            'batchNumber' => 'required',
            'training_status' => 'required',
            'scholarship' => 'required',
        ]);

        DB::table('alumnis')->insert([
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'streetAddress' => $request->streetAddress,
            'barangay' => $request->barangay,
            'city' => $request->city,
            'district' => $request->district,
            'province' => $request->province,
            'region' => $request->region,
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'sex' => $request->sex,
            'nationality' => $request->nationality,
            'civil_status' => $request->civil_status,
            'email' => $request->email,
            'batchNumber' => $request->batchNumber,
            'training_status' => $request->training_status,
            'scholarship' => $request->scholarship,
        ]);

        return redirect('/manageAlumni')->with('success', 'Registration successful');
    }
}

