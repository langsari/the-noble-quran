<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        // $tafseers = Tafseer::paginate(5);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
          
            'is_admin' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'user has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', ['user' =>  $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $request->validate([
            'name' => 'required',
           
            'is_admin' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user->name = $request->name;
   
        $user->is_admin = $request->is_admin;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }


//     public function index() {
//         $users = User::latest()->get();
//         // $tafseers = Tafseer::paginate(5);
//         return view('manageuser.index', compact('users'));
//     }

//     public function show(User $user) {
//         return view('manageuser.show', ['user' =>  $user]);
//     }
    
//     public function create() {
//         return view('manageuser.create');
//     }

//     public function edit(User $user) {
//         return view('manageuser.edit', compact('user'));
//     }

//     public function update(Request $request, User $user) {
//         $request->validate([
//             'name' => 'required',
           
//             'is_admin' => 'required',
//             'email' => 'required',
//             'password' => 'required'
//         ]);
//         $user->name = $request->name;
   
//         $user->is_admin = $request->is_admin;
//         $user->email = $request->email;
//         $user->password = $request->password;
//         $user->save();
//         return redirect()->route('manageuser.index');
//     }

//     public function store(Request $request) {
//         $data = $request->validate([
//             'name' => 'required',
          
//             'is_admin' => 'required',
//             'email' => 'required',
//             'password' => 'required'
//         ]);

//         User::create($data);

//         return redirect()->route('manageuser.index')->with('success', 'user has been added!');
//     }
//  /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(User $user) {
//         $user->delete();
//         return back();
//     }
}
