<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class donateController extends Controller
{
    //
    public function index()
    {
        $donations = Donate::all(); 
        return view('donations', ['donations' => $donations]);
    }

    // Store a new donation
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'contributorName' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'modeUsed' => 'required|string',
        ]);

        // Create a new donation
        Donate::create([
            'contributor_name' => $request->contributorName,
            'amount' => $request->amount,
            'date' => $request->date,
            'description' => $request->description,
            'mode_used' => $request->modeUsed,
        ]);

        // Redirect or return response
        return redirect()->route('index')->with('success', 'Donation added successfully!');
    }
}
