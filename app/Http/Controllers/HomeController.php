<?php

namespace App\Http\Controllers;

use DB;
use Request;
use Auth;
use Input;

class HomeController extends Controller
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
            return view('pages.home.welcome');
        }
        else
        {
            return redirect('/login');
        }
    }

    public function login()
    {
        if (Request::isMethod('get'))
        {
            // $this->data = array();
            // $this->data ['ins'] = InOut::where('enabled', '=', 1)->where('status', '=', 1)->get();
            
            return view('pages.home.login');
        }
        else if (Request::isMethod('post'))
        {
            // dd('test');
            $credentials = Input::only('username','password');

            if (Auth::attempt($credentials, true))
            {
                return redirect()->intended('/');
            }
            return redirect('/login');
        }
    }

    public function logout()
    {
        //dd('test');
        Auth::logout();
        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.home.create');
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
