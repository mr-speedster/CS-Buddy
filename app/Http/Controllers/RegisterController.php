<?php

namespace App\Http\Controllers;

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
        $name = $request->post('name');
        $roll_no = $request->post('roll_no');
        $sem = $request->post('sem');
        $touter = $request->post('touter');
        $admission_no = $request->post('admission_no');
        $email = $request->post('email');
        $address = $request->post('address');
        $gender = $request->post('gender');
        $blood = $request->post('blood_group');
        $password = $request->post('password');

        $validate = $request->validate([
            'user_name' => 'min:2 | max:100',
            'user_pass' => 'min:8 | max:100',
        ]);

        if ($request->post('user_pass') !== $request->post('conform_pass')) {
            return redirect('/user/signup')->withErrors('Password not match!');
        }

        $user = new User();
        

        return redirect(route('EventBoard'));
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
