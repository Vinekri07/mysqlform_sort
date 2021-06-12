<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdetail = user::all()->sortByDesc('created_at');
        //$userdetail = DB::table('users')->latest('created_at')->first();
        return view('home', compact('userdetail'));
    }

    // public function detail(){
    //     return view('detail');
    // }

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

        $validated = $request->validate([
            'name' => 'required|regex:/^[a-z,A-Z, ]*$/',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^[6-9][0-9]{9}$/',
            'house' => 'regex:/^[a-z,A-Z,0-9, ]*$/',
            'address' => 'required|max:500|regex:/^[a-z,A-Z,0-9, ]*$/',
        ]);

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->mobile = request('mobile');
        $user->house = request('house');
        $user->address = request('address');
        $user->save();
        

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
