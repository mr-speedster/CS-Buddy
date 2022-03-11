<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AdminAttandanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addUser.addattendance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'roll_no' => 'required',
            'code1' => 'required',
            'code2' => 'required',
            'code3' => 'required',
            'code4' => 'required',
            'code5' => 'required',
            'code6' => 'required',
            'code7' => 'required',
            'code8' => 'required',
            'date' => 'required',
        ]);
        if($validate == null){
            return redirect(route('AdminAttandance'))->withErrors('failed');
        }else{
            $attendance = new Attendance();
            $attendance->roll_no = $request->post('roll_no');
            $attendance->cst_301 = $request->post('code1');
            $attendance->cst_303 = $request->post('code2');
            $attendance->cst_305 = $request->post('code3');
            $attendance->cst_307 = $request->post('code4');
            $attendance->cst_309 = $request->post('code5');
            $attendance->mnc_301 = $request->post('code6');
            $attendance->cst_331 = $request->post('code7');
            $attendance->cst_333 = $request->post('code8');
            $attendance->date = $request->post('date');
            $attendance->save();
            return redirect(route('AdminAttandance'))->with('success','done');
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
