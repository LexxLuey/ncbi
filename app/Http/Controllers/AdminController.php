<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $view_data['students'] = Student::all();
        $view_data['growth_track'] = Student::where('completed_growth_track', true)->count();
        return view('admin.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('admin.student.student-details', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $imageName = '';
        if ($request->hasFile('file')) {
          $imageName = time() . '.' . $request->file->extension();
          $request->file->storeAs('public/images', $imageName);
          if ($student->photo) {
            Storage::delete('public/images/' . $student->photo);
          }
        } else {
          $imageName = $student->photo;
        }
    
        $studentData = [
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
    
        $student->update($studentData);
        return redirect()->route('student', $student)->with(['message' => 'Student updated successfully!', 'status' => 'success']);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Storage::delete('public/images/' . $student->photo);
        $student->delete();

        return redirect()->back()->with(['message' => 'Student deleted successfully!', 'status' => 'info']);
    
    }
}
