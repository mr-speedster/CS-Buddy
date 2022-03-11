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
        return view('admin.Adminview.userview',['users'=>$user]);
    }

    public function EventView()
    {
        $event = Event::all();
        return view('admin.Adminview.eventview',['events'=>$event]);
    }

    public function AnnouncementView()
    {
        $announce = Announcement::all();
        return view('admin.Adminview.announcementview',['announces'=>$announce]);
    }

    public function TimeTableView()
    {
        $table = TimeTable::all();
        return view('admin.Adminview.timetableview',['tables'=>$table]);
    }

    public function AttendanceView()
    {
        $attend = Attendance::all();
        return view('admin.Adminview.attendanceview',['attends'=>$attend]);
    }

    public function PhotosView()
    {
        $photo = Photos::all();
        return view('admin.Adminview.photosview',['photos'=>$photo]);
    }

    public function AcademicsView()
    {
        $academic = Academics::all();
        return view('admin.Adminview.academicsview',['academics'=>$academic]);
    }

    public function AdminView()
    {
        $admin = Admin::all();
        return view('admin.Adminview.adminview',['admins'=>$admin]);
    }


    /**Delete */

    public function UserDelete($id)
    {
        CsUser::where('id',$id)->delete();
        return back();
    }

    public function EventDelete($id)
    {
        $event = Event::where('id',$id)->first()->delete();
        return back();
    }

    public function AnnouncementDelete($id)
    {
        $announce = Announcement::where('id',$id)->delete();
        return back();
    }

    public function TimeTableDelete($id)
    {
        $table = TimeTable::where('id',$id)->delete();
        return back();
    }

    public function AttendanceDelete($id)
    {
        $attend = Attendance::where('id',$id)->delete();
        return back();
    }

    public function PhotosDelete($id)
    {
        $photo = Photos::where('id',$id)->delete();
        return back();
    }

    public function AcademicsDelete($id)
    {
        $academic = Academics::where('id',$id)->first();
        $academic->delete();
        return back();
    }

    public function AdminDelete($id)
    {
        $admin = Admin::where('id',$id)->delete();
        return back();
    }

    /*update*/

    public function UserUpdate($id)
    {
        $user = CsUser::where('id',$id)->first();
        return view('admin.update.userupdate',['user'=>$user]);
    }

    public function UserUpdateAction(Request $request,$id)
    {
        $cs_user = CsUser::where('id',$id)->first();
        $cs_user->user_name = $request->post('name');
        $cs_user->roll_no = $request->post('roll_no');
        $cs_user->email = $request->post('email');
        $cs_user->sem = $request->post('sem');
        $cs_user->touter = $request->post('touter');
        $cs_user->addmisson_no = $request->post('admission_no');
        $cs_user->address = $request->post('address');
        $cs_user->blood = $request->post('blood_group');
        $cs_user->gender = $request->post('gender');
        $cs_user->password = $request->post('password');
        $cs_user->save();
        return redirect(route('UserView'));
    }

    public function EventUpdate($id)
    {
        $event = Event::where('id',$id)->first();
        return view('admin.update.eventupdate',['event'=>$event]);
    }

    public function EventUpdateAction(Request $request,$id)
    {
        $event = Event::where('id',$id)->first();
            $event->event_name = $request->post('event_name');
            $event->event_logo = $request->post('logo_cdn'); 
            $event->date = $request->post('date');
            $event->time = $request->post('time');
            $event->save();
        return redirect(route('EventView'));
    }

    public function AnnouncementUpdate($id)
    {
        $announce = Announcement::where('id',$id)->first();
        return view('admin.update.announcementupdate',['announce'=>$announce]);
    }

    public function AnnouncementUpdateAction(Request $request,$id)
    {
        $announce = Announcement::where('id',$id)->first();
            $announce->msg = $request->post('message');
            $announce->updator_name = $request->post('updator_name');
            $announce->date = $request->post('date');
            $announce->time = $request->post('time');
            $announce->save();
        return redirect(route('AnnouncementView'));
    }

    public function TimeTableUpdate($id)
    {
        $table = TimeTable::where('id',$id)->first();
        return view('admin.update.timetableupdate',['table'=>$table]);
    }

    public function TimeTableUpdateAction(Request $request,$id)
    {
        $table = TimeTable::where('id',$id)->first();
            $table->day_name = $request->post('day_name');
            $table->hour = $request->post('hour');
            $table->subject = $request->post('subject');
            $table->teacher = $request->post('teacher');
            $table->time = $request->post('time');
            $table->save();
        return redirect(route('TimeTableView'));
    }

    public function AttendanceUpdate($id)
    {
        $attend = Attendance::where('id',$id)->first();
        return view('admin.update.attendanceupdate',['attend'=>$attend]);
    }

    public function AttendanceUpdateAction(Request $request,$id)
    {
        $attend = Attendance::where('id',$id)->first();
            $attend->roll_no = $request->post('roll_no');
            $attend->cst_301 = $request->post('code1');
            $attend->cst_303 = $request->post('code2');
            $attend->cst_305 = $request->post('code3');
            $attend->cst_307 = $request->post('code4');
            $attend->cst_309 = $request->post('code5');
            $attend->mnc_301 = $request->post('code6');
            $attend->cst_331 = $request->post('code7');
            $attend->cst_333 = $request->post('code8');
            $attend->date = $request->post('date');
            $attend->save();
        return redirect(route('AttendanceView'));
    }

    public function PhotosUpdate($id)
    {
        $photo = Photos::where('id',$id)->first();
        return view('admin.update.photosupdate',['photo'=>$photo]);
    }

    public function PhotosUpdateAction(Request $request,$id)
    {
        $photo = Photos::where('id',$id)->first();
        $photo->cdn_link = $request->post('cdn_link');
        $photo->celibration_name = $request->post('celibration_name');
        $photo->club_name = $request->post('club_name');
        $photo->date = $request->post('date');
        $photo->msg = $request->post('msg');
        $photo->save();
        return redirect(route('PhotosView'));
    }

    public function AcademicsUpdate($id)
    {
        $academic = Academics::where('id',$id)->first();
        return view('admin.update.academicsupdate',['academic'=>$academic]);
    }

    public function AcademicsUpdateAction(Request $request,$id)
    {
            $student = Academics::where('id',$id)->first();
            $student->exam_name = $request->post('exam_name');
            $student->date = $request->post('date');
            $student->no = $request->post('no');
            $student->subject = $request->post('subject');
            $student->mark = $request->post('mark');
            $student->credit = $request->post('credit');
            $student->roll_no = $request->post('roll_no');
            $student->save();
            return redirect(route('AcademicsView'));
    }

    public function AdminUpdate($id)
    {
        $admin = Admin::where('id',$id)->first();
        return view('admin.update.adminupdate',['admin'=>$admin]);
    }

    public function AdminUpdateAction(Request $request,$id)
    {
        $admin = Admin::where('id',$id)->first();
        $admin->email = $request->post('email');
        $admin->password = $request->post('password');
        $admin->save();
        return redirect(route('AdminView'));
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
