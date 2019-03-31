<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{

    public function __construct() { 
        $this->middleware('auth'); 
    }

    function uploadFile($field_name, $destination) {
        // dd(Input::file($field_name));
        if (!is_null(Input::file($field_name))) {
            $file = Input::file($field_name)->getClientOriginalName();

            $input[$field_name] = $file;

            $file1 = Input::file($field_name);

            $uploadSuccess = $file1->move($destination, $file);
            return $file;
        } else {
            return false;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students= Student::where("id",'>=',1)->get();
        return  view('students/index')->with("students",$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('students/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        // return $request->name;
    //    return $request->all();
    //     $validator = Validator::make(
    //         $request->all(),
    //     [ 'name' => 'required' ]
    // );
    // //    dd( $validator->fails());
    // if ($validator->fails()) {
    //     return Redirect::back()
    //         ->withErrors($validator) // send back all errors to the login form
    //         ->withInput();
    // }
    $input = $request->all();
    // dd($request->all());
    $destination= 'images';
    if(!is_null(Input::file('image'))){

        $image = $this->uploadFile('image', $destination);
// dd(gettype($image));
        // return $similar_sections['image_en'].$image_en ;
         if (gettype($image) == 'string'){
            
            $input['image'] = $destination.'/'.$image;
        }
     }
        $st = new Student; 
        $st->name = $input['name'];
        $st->img = $input['image'];

        $st->save(); 
        //return $this->index();
        return redirect('student/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student= Student::find($id);
        return view('students/show')->with('student',$student);
        //return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student= Student::find($id);

        return view('students/edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request)
    {
       // return $request;
        Student::where('id', $request->id)
          ->update(['name' => $request->name]);
        //  $input = $request->all(); 
        // return $input;
    //   $st=  $student->update($input);
        // return $st;
        return redirect('/student/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student= Student::find($id);
        $student->delete();
        return redirect('/student/index');

    }
}
