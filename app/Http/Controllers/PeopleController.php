<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Str;


class PeopleController extends Controller
{
    public function people() {
        $people = People::all();
        return view('people.people', compact('people')) ;
    } 

    public function peopleInfo(){

        $people = People::all();
        return view('people.people_info', compact('people'));
        // dd ($people) ;
    }


    
    public function show($name)
    {
   $decodedName = str_replace('-', ' ', $name); // Convert hyphens back to spaces
    $person = People::where('name', $decodedName)->firstOrFail();

    return view('people.people_info', compact('person'));
    }
   
    
    
    public function add(){
        return view('people.store') ;
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'mobile' => 'required|string',
            'position' => 'required|string',
            'profile' => 'required|string',
            'department' => 'required|string',
        ]);

        // Save the data to the database
        $people = new People($validatedData);
        $people->save();

        return redirect()->route('people.store')->with('success', 'Person added successfully!');

    }
}
