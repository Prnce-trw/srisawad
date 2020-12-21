<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Qualification;

use DB;

use File;
class qualificationController extends Controller
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


public function qualification()
    {
        $qualification = Qualification::all();
        
        return view('backoffice.qualification.qualification',compact('qualification'));


    }
public function qualificationform()
    {
        
        return view('backoffice.qualification.create');
    }
public function create(Request $request)
    {
    	//dd($request);
      $qualification = new Qualification();
        $qualification->name = $request->name;
        
        $qualification->save();
        return redirect()->to('backoffice/qualification')->with('success', 'success');
    }




public function edit($id)
    {

        $qualification=DB::table('qualification')->where('id',$id)->first();

        return view('backoffice.qualification.edit',['qualification'=>$qualification]);
        //
    }
public function update2(Request $request)
    {
   // dd($request);
   
        $id = $request->id;
        $name = $request->name;

        $qualification=Qualification::where('id',$id)->first();
        $qualification->name = $request->name;
       
      // dd($qualification);
        $qualification->save();

    return redirect()->to('backoffice/qualification');


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
    DB::table('qualification')->where('id',$id)->update($array);
    return redirect('/qualification');
        
         return redirect()->to('backoffice/qualification')->with('success', 'success');
    }



    public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('qualification')->where('id',$id)->delete();
        return redirect()->to('backoffice/qualification')->with('success', 'success');
    }





    public function target()
    {
       //$target = Target::all();
     

        return view('backoffice.target.target');
    }









 public function credits()
    {
        
        return view('backoffice.credits.credits');
    }


public function creditsform()
    {
        
        return view('backoffice.credits.create');
    }




}