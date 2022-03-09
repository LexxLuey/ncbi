<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Church;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Mail\NCBIRegistration;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    public function success()
    {
        return view('success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['churches'] = Church::all();
        return view('home', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $request->first_name.$request->surname.time() . '.' . $request->file->extension();
        // $request->image->move(public_path('images'), $imageName);
        $request->file->storeAs('public/images', $imageName);
    
        $postData = [
            'first_name' => $request->first_name, 
            'middle_name' => $request->middle_name, 
            'surname' => $request->surname, 
            'sex' => $request->sex, 
            'age_range' => $request->age_range, 
            'phone_number' => $request->phone_number, 
            'email' => $request->email, 
            'marital_status' => $request->marital_status, 
            'address' => $request->address, 
            'photo' => $imageName, 
            'centre' => $request->centre, 
            'completed_growth_track' => $request->completed_growth_track == 'on' ? true : false
        ];
    
        $reg = Student::create($postData);

        if ($postData['email']) {
            Mail::to($postData['email'])->queue(new NCBIRegistration($reg));
        }

        return redirect()->route('success')->with(['message' => 'Registered successfully!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
