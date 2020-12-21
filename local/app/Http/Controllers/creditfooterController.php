<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contactorfooter;
use App\Creditfooter;

use DB;

//use File;
class creditfooterController extends Controller
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


public function creditfooter()
    {
      $creditfooter = Creditfooter::all();
        
        return view('backoffice.creditfooter.creditfooter',compact('creditfooter'));



    }
public function creditfooterform()
    {
        
        return view('backoffice.creditfooter.create');
    }
public function create(Request $request)
    {
       //dd($request);
      $creditfooter = new Creditfooter();
        $creditfooter->name = $request->name;
		  $creditfooter->detail = $request->detail;
        
        $creditfooter->save();
        return redirect()->to('backoffice/credit')->with('success', 'success');
    }




public function edit($id)
    {

        $creditfooter=DB::table('creditfooter')->where('id',$id)->first();

        return view('backoffice.creditfooter.edit',['creditfooter'=>$creditfooter]);
        //
    }
public function updatecontactorfooter(Request $request)
    {
   // dd($request);
   
        $id = $request->id;
        $name = $request->name;
		$detail = $request->detail;

        $creditfooter=Creditfooter::where('id',$id)->first();
        $creditfooter->name = $request->name;
		   $creditfooter->detail = $request->detail;
       
      // dd($qualification);
        $creditfooter->save();

    return redirect()->to('backoffice/credit');


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
    return redirect('/contactor');
        
         return redirect()->to('backoffice/contactor')->with('success', 'success');
    }



   public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('creditfooter')->where('id',$id)->delete();
        return redirect()->to('backoffice/credit')->with('success', 'success');
    }













}