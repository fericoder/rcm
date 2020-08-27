<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\UserRequest;
use App\Role;
use Illuminate\Http\Request;
use App\User;

class UsersController extends \App\Http\Controllers\Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('complex_id', \Auth::user()->complex_id)->where('userType', '!=' , 'unit')->get();
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'fullName' => 'required',
           'email' => 'required|unique:users',
           'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
           'password_confirmation' => 'min:6'
       ]);

        $user = User::create(['fullName' => $request->fullName, 'password' => bcrypt($request->password) , 'mobile' => $request->mobile, 'email' => $request->email, 'code' => $request->code , 'complex_id' => \Auth::user()->complex_id, 'userType' => 'user' ]);
            $user->roles()->sync($request->input('role_id'));

        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        $roles = Role::all();
        $user = User::find($User->id);
        return view('dashboard.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'nullable|min:6'
        ]);

        if ($request->has('password')){
            $user->update(['fullName' => $request->fullName, 'password' => bcrypt($request->password) , 'mobile' => $request->mobile, 'email' => $request->email, 'code' => $request->code , 'complex_id' => \Auth::user()->complex_id, 'userType' => 'user' ]);
            $user->roles()->sync($request->input('role_id'));
        }else{
            $user->update(['fullName' => $request->fullName, 'mobile' => $request->mobile, 'email' => $request->email, 'code' => $request->code]);
            $user->roles()->sync($request->input('role_id'));
        }

        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User, Request $request)
    {
//        User::find($request->id)->delete();
//        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
//        return redirect()->back();
    }
}
