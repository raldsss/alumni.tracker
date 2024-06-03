<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class ManageController extends Controller
{
     public function manageAlumni()
    {
        $alumni = Alumni::orderBy('created_at', 'desc')->get();
        return view('manageAlumni', ['alumni' => $alumni]);
    }
    public function updateAlumni(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $request->validate([
            'firstName' => 'nullable',
            'middleName' => 'nullable',
            'lastName' => 'nullable',
            'streetAddress' => 'nullable',
            'barangay' => 'nullable',
            'city' => 'nullable',
            'district' => 'nullable',
            'province' => 'nullable',
            'region' => 'nullable',
            'birthdate' => 'nullable|date',
            'age' => 'nullable|numeric',
            'sex' => 'nullable',
            'nationality' => 'nullable',
            'civil_status' => 'nullable',
            'email' => 'nullable',
            'batchNumber' => 'nullable|numeric',
            'training_status' => 'nullable',
            'scholarship' => 'nullable',
        ]);

        DB::table('alumnis')->update([

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
    return redirect()->back()->with('success', 'Alumni updated successfully.');
}

}
