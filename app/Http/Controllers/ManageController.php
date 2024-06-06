<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function manageAlumni()
    {
        $alumni = Alumni::orderBy('alumni_id', 'asc')->get();
        return view('manageAlumni', ['alumni' => $alumni]);
    }

    public function updateAlumni(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $request->validate([
            'alumni_id' => 'required|exists:alumnis,alumni_id',
            'firstName' => 'nullable|string',
            'middleName' => 'nullable|string',
            'lastName' => 'nullable|string',
            'streetAddress' => 'nullable|string',
            'barangay' => 'nullable|string',
            'city' => 'nullable|string',
            'district' => 'nullable|string',
            'province' => 'nullable|string',
            'region' => 'nullable|string',
            'birthdate' => 'nullable|date',
            'age' => 'nullable|numeric',
            'sex' => 'nullable|string',
            'nationality' => 'nullable|string',
            'civil_status' => 'nullable|string',
            'email' => 'nullable|email',
            'batchNumber' => 'nullable|numeric',
            'training_status' => 'nullable|string',
            'scholarship' => 'nullable|string',
        ]);

        $alumni = Alumni::findOrFail($request->alumni_id);

        $alumni->update([
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
