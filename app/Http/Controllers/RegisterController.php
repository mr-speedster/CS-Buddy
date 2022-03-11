<?php

namespace App\Http\Controllers;

use App\Models\CsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cs_user = new CsUser();

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

        return redirect(route('LogIn'));
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
