<?php

namespace App\Http\Controllers;

use View;
use Request;
use Input;
use Hash;
use Auth;
use App\Models\Menu;
Use App\Models\User;
use Illuminate\Routing\Redirector;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $this->data = array();
            $this->data['items'] = Menu::where('enabled', '=', 1)->where('menuid', '=', 1)->get();
            //dd($this->data);
            return view('pages.settings.index', $this->data);
        }
        else
        {
            return redirect('/login');
        }
    }

    public function profile()
    {
        if(Auth::check())
        {
            $this->data['items'] = Menu::where('enabled', '=', 1)->where('menuid', '=', 1)->get();
            return view('pages.settings.profile', $this->data);
        }
        else
        {
            return redirect('/login');
        }
    }

    public function password()
    {
        if(Auth::check())
        { 
            if(Request::isMethod('get'))
            {
                $this->data['menus'] = Menu::where('enabled', '=', 1)->where('menuid', '=', 1)->get();
                return view('pages.settings.password',  $this->data);
            }
            if(Request::isMethod('post'))
            {
                $getPass = Input::get('password2');
                $passHash = Hash::make($getPass);
                $username =Auth::user()->username;
                $userid =Auth::user()->id;
                $userPass = Auth::user()->password;
                
                $newPass = User::where('id', $userid)->update(array('password'=>$passHash));
                return redirect('settings');
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function email()
    {
        if(Auth::check())
        {
            if(Request::isMethod('get'))
            {
                $userid =Auth::user()->id;
                
                $this->data['menus'] = Menu::where('enabled', '=', 1)->where('menuid', '=', 1)->get();
                $this->data['users'] = User::where('id', '=', $userid)->get();

                //dd($this->data);
                return view('pages.settings.email',  $this->data);
            }
            if(Request::isMethod('post'))
            {
                $getEmail = Input::get('newEmail');

                $userid =Auth::user()->id;

                //dd($getEmail);
                $newPass = User::where('id', $userid)->update(array('email'=>$getEmail));
                return redirect('settings/email');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
