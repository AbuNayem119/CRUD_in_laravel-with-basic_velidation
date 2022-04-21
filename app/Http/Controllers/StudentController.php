<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Student All management....
     */


     /**
      * All Student...
      */
      public function index()
      {
          $all_data = Student::all();
          return view('student.index', [
              'all_data'        => $all_data,
          ]);
      }

      /**
      * Create Student...
      */
      public function create()
      {
          return view('student.create');
      }

      /**
      * Store Student...
      */
      public function store(Request $request)
      {

        $this -> validate($request, [
            'name'  => 'required',
            'email'  => ['required','unique:students','email'],
            'cell'  => ['required','numeric', 'starts_with:01'],
            'address'  => 'required',
        ]);

        $unique_img_name = '';
        if ( $request -> hasFile('image') ) {
            $img = $request -> file('image');
            $unique_img_name = md5(time().rand()).".". $img -> getClientOriginalExtension();
            $img -> move(public_path('media/student') , $unique_img_name);
        }

        Student::create([
        'name'      => $request -> name,
        'email'     => $request -> email,
        'cell'      => $request -> cell,
        'address'   => $request -> address,
        'image'     => $unique_img_name,
        ]);

        return back()->with('success','Data sent Successfully !');

      }

      /**
      * Edit Student...
      */
      public function edit($id)
      {
        $data = Student::find($id);
        return view('student.edit', [
            'all_data'      => $data,
        ]);
      }

      /**
      * Edit Student...
      */
      public function update(Request $request, $id)
      {
        $data = Student::find($id);
        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> cell = $request -> cell;
        $data -> address = $request -> address;
        $data -> update();
        return back();
        
      }

      /**
      * Show Student...
      */
      public function show($id)
      {
        $all_data = Student::find($id);
        return view('student.show', [
            'all_data'      => $all_data,
        ]);
      }

      /**
      * Destroy Student...
      */
      public function destroy($id)
      {
          $data = Student::find($id);
          $data -> delete();
          return back()->with('success','Data Deleted !');
      }

























}
