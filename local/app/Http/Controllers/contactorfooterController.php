<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contactorfooter;

use DB;

//use File;
class contactorfooterController extends Controller
{
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

return view('backoffice.dashboard');


    }


public function contactorfooter()
    {
      $contactorfooter = Contactorfooter::all();
        
        return view('backoffice.contactorfooter.contactorfooter',compact('contactorfooter'));



    }
public function contactorfooterform()
    {
        
        return view('backoffice.contactorfooter.create');
    }
public function create(Request $request)
    {
       //dd($request);
      $contactorfooter = new Contactorfooter();
        $contactorfooter->name = $request->name;
		  $contactorfooter->detail = $request->detail;
        
        $contactorfooter->save();
        return redirect()->to('backoffice/contactor')->with('success', 'success');
    }




public function edit($id)
    {

        $contactorfooter=DB::table('contactorfooter')->where('id',$id)->first();

        return view('backoffice.contactorfooter.edit',['contactorfooter'=>$contactorfooter]);
        //
    }
public function updatecontactorfooter(Request $request)
    {
   // dd($request);
   
        $id = $request->id;
        $name = $request->name;
		$detail = $request->detail;

        $contactorfooter=Contactorfooter::where('id',$id)->first();
        $contactorfooter->name = $request->name;
		   $contactorfooter->detail = $request->detail;
       
      // dd($qualification);
        $contactorfooter->save();

    return redirect()->to('backoffice/contactor');


    }



public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            
 ]);

        $array=array(
            'name' => $request->input('name'),
         
            'created_at'=>new Datetime()
        
    );
    DB::table('contactorfooter')->where('id',$id)->update($array);
    return redirect('/contactorfooter');
        
         return redirect()->to('backoffice/contactor')->with('success', 'success');
    }



   public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('contactorfooter')->where('id',$id)->delete();
        return redirect()->to('backoffice/contactor')->with('success', 'success');
    }













}