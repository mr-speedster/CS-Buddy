<?php

namespace App\Http\Controllers;

use App\Models\Academics;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Attendance;
use App\Models\CsUser;
use App\Models\Event;
use App\Models\Photos;
use App\Models\TimeTable;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UserView()
    {
        $user = CsUser::all();
        return view('admin.view.userview',['users'=>$user]);
    }

    public function EventView()
    {
        $event = Event::all();
        return view('admin.view.eventview',['events'=>$event]);
    }

    public function AnnouncementView()
    {
        $announce = Announcement::all();
        return view('admin.view.announcementview',['announces'=>$announce]);
    }

    public function TimeTableView()
    {
        $table = TimeTable::all();
        return view('admin.view.timetableview',['tables'=>$table]);
    }

    public function AttendanceView()
    {
        $attend = Attendance::all();
        return view('admin.view.attendanceview',['attends'=>$attend]);
    }

    public function PhotosView()
    {
        $photo = Photos::all();
        return view('admin.view.photosview',['photos'=>$photo]);
    }

    public function AcademicsView()
    {
        $academic = Academics::all();
        return view('admin.view.academicsview',['academics'=>$academic]);
    }

    public function AdminView()
    {
        $admin = Admin::all();
        return view('admin.view.adminview',['admins'=>$admin]);
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
