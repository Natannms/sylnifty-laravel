<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Post;
use App\Models\Service;
use App\Models\Social;
use App\Models\Wiki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        //authenticate user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //is admin ?
            if (Auth::user()->type == 'admin') {
                // Authentication passed...
                return view('admin.dashboard.index')->with('data', [
                    'user' => Auth::user(),
                    'orders' => Order::all(),
                    'posts' => Post::all(),
                    'services' => Service::all(),
                    'social' => Social::all(),
                    'wiki' => Wiki::all(),
                ]);
            } else {
                return redirect()->back()->with('error', 'Acesso Negado!');
            }
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
