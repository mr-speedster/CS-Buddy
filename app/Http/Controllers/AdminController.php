<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function addAdmin()
    {
        return view('admin.addUser.addadmin');
    }

    public function addAdminAction(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $admin = new Admin();
        $admin->email = $email;
        $admin->password = $password;
        $admin->save();
        return redirect(route('AdminView'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $admin = new Admin();
        $admin_validate = $admin
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->count();
        $request->session()->put('email', $email);
        if ($admin_validate == 1) {
            return redirect(route('UserView'));
        }else{
            return redirect(route('AdminLogin'))->withErrors('Check your mail or Password');
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
