<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $registers = DB::table('tb_credit')->get();
       $data = array(
            'registers' => $registers,
       );
       return view('backoffice.register.index',$data);
    }

    public function list()
    {
       $contacts = DB::table('tb_contact')->get();
       $data = array(
            'contacts' => $contacts,
       );
       return view('backoffice.contact.index',$data);
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
       
    }

    public function del(Request $request)
    {
        DB::table('tb_credit')->where('cd_id',$request->id)->delete();
        return redirect()->to('backoffice/registerlist')->with('success', 'success');
    }

    public function del2(Request $request)
    {
        DB::table('tb_contact')->where('ct_id',$request->id)->delete();
        return redirect()->to('backoffice/contactlist')->with('success', 'success');
    }

    
}

