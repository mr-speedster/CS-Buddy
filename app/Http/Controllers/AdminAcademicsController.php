<?php

namespace App\Http\Controllers;

use App\Models\Academics;
use Illuminate\Http\Request;

class AdminAcademicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.Academics.academics');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'exam_name' => 'required',
            'date' => 'required',
            'no' => 'required',
            'subject' => 'required',
            'mark' => 'required',
            'credit' => 'required',
        ]);
        if ($validate == null) {
            return redirect(route('AdminAcademics'))->withErrors('failed');
        }else{
            $student = new Academics();
            $student->exam_name = $request->post('exam_name');
            $student->date = $request->post('date');
            $student->no = $request->post('no');
            $student->subject = $request->post('subject');
            $student->mark = $request->post('mark');
            $student->credit = $request->post('credit');
            $student->save();
            return redirect(route('AdminAcademics'))->with('success','done');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
