<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApplicationController extends Controller
{

    public function __construct() {
         $this->middleware('auth');
    }
    public function index() {

        $results=  User::applicationList(5);
      //  dd($results);
        return view('applicationlist', ['results'=>$results]);


    }

    public function edit() {


        $result=  User::find(request()->id);

        return view('edit', ['result'=>$result]);


    }

     /**
     * soft delete post
     *
     * @return void
     */
    public function destroy()
    {
        User::find(request()->id)->delete();
        return redirect()->back();
    }



     /**
     * update user data post
     *
     * @return void
     */
    public function update()
    {

       $updated = User::where('id', request('id'))
         ->update([
            'first_name' => request('fname'),
            'last_name' => request('lname'),
            'name' => request('fname').' '.request('fname'),
            'phone' => request('phone'),
            'dob' => request('dob'),
            'job_title' => request('job'),
            'is_experience' => request('experience'),
            'is_approved' => request('approved'),
         ]);

         if( $updated ) {
          return  redirect('/applications');
         }
        return redirect()->back();
    }


    /**
     * update user data post
     *
     * @return void
     */
    public function approval()
    {

       $data =  User::find(request()->id);

       $updated = User::where('id', request('id'))
         ->update([
            'is_approved' => $data->is_approved=='on'?0:'on',
         ]);

         if( $updated ) {
          return  redirect('/applications');
         }
        return redirect()->back();
    }

}
