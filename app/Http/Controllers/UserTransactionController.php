<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTransactionController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoiceid = 123456789;
        return view('user.transaction')->with('invoiceid', $invoiceid);
    }
    
}