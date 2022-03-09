<?php

namespace App\Http\Controllers;

use App\Models\TimeTable;
use Illuminate\Http\Request;

class AdminTimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.pages.timeTable.timetable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'day_name' => 'required',
            'hour' => 'required',
            'subject' => 'required',
            'teacher' => 'required',
            'time' => 'required',
        ]);
        if($validate == null){
            return redirect(route('AdminTimeTable'))->withErrors('failed');
        }else{
            $table = new TimeTable();
            $table->day_name = $request->post('day_name');
            $table->hour = $request->post('hour');
            $table->subject = $request->post('subject');
            $table->teacher = $request->post('teacher');
            $table->time = $request->post('time');
            $table->save();
            return redirect(route('AdminTimeTable'))->with('success','done');
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
