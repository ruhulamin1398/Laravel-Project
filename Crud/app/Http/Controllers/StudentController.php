<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::paginate(10);


        return view("welcome",compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    //     $this->$request->validate([

    //         'firstname'    =>'requierd',
    //         'lastname'     =>'requierd',
    //         'email'         =>'requierd',
    //         'phone'         =>'required'

    //     ]);

    //         $validatedData = $request->validate([
    //     'title' => 'required|unique:posts|max:255',
    //     'body' => 'required',
    // ]);


         $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);


        $student= new student;

        $student->first_name=$request->firstname;
        $student->last_name=$request->lastname;
        $student->email=$request->email;
        $student->phone=$request->phone;

        $student->save();

        return redirect(route("home"))->with('successMsg','Student Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view("edit",compact("student"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        
         $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);


        $student= Student::find($id);

        $student->first_name=$request->firstname;
        $student->last_name=$request->lastname;
        $student->email=$request->email;
        $student->phone=$request->phone;

        $student->save();

        return redirect(route("home"))->with('successMsg','Student Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
         return redirect(route("home"))->with('successMsg','Student Successfully Deleted');
    }
}
