<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\student;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function StudentLogIn(){
        return view('studentlogin');
    }

    public function studentLoged(Request $request){
        $student= student::where('email',$request->email)->where('password',$request->password)->get()->toArray();
        if($student){
            $request->session()->put('student_session', $student[0]['id']);
            return redirect('dashboardstudent/');
        }else{
            session::flash('coc', 'email and password not match');
            return redirect('/loginpage1/')->withInput();
        }
    }
   public function dashBoard(){
        return view('dashboardstudent');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new student;
        $student ->sname = $request ->sname;
        $student ->class = $request ->class;
        $student ->phnum = $request ->phnum;
        $student ->email = $request ->email;
        $student ->password = $request ->password;
        $student -> save();
        return redirect('studentregisterform');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $students = student::paginate(10);
          return view('studentdetails',compact('students'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $students = student::find($id);
         return view('studentedit',compact('students'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = student::find($id);

        $student->sname = $request->sname;
        $student->class = $request->class;
        $student->phnum = $request->phnum;
        $student->email = $request->email;
        $student ->password = $request ->password;
        $student->save();
        return redirect ('studentdetails');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect ('studentdetails');

    }
}
