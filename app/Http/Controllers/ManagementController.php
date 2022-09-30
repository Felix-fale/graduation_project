<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Management::latest()->paginate(5);

        return view('adminHome', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managmentCreate');
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
            'user_name'          =>  'required',
            'user_email'         =>  'required|email|unique:management',
        ]);

        // $file_name = time() . '.' . request()->student_image->getClientOriginalExtension();

        // request()->student_image->move(public_path('images'), $file_name);

        $user = new Management;

        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->user_gender = $request->user_gender;

        $user->save();

        return redirect()->route('managements.index')->with('success', 'Users Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function show(Management $management)
    {
        return view('managementShow', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function edit(Management $management)
    {
        return view('managementEdit', compact('management'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Management $management)
    {
        $request->validate([
            'user_name'      =>  'required',
            'user_email'     =>  'required|email',
        ]);

        // $student_image = $request->hidden_student_image;

        // if($request->student_image != '')
        // {
        //     $student_image = time() . '.' . request()->student_image->getClientOriginalExtension();

        //     request()->student_image->move(public_path('images'), $student_image);
        // }

        $user = Management::find($request->hidden_id);
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->user_gender = $request->user_gender;

        $user->save();

        return redirect()->route('managements.index')->with('success', 'Student Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function destroy(Management $management)
    {
        $management->delete();

        return redirect()->route('managements.index')->with('success', 'User Data deleted successfully');
    }
}
