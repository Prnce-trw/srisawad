<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Logosocial;

use DB;

use File;
class logosocialController extends Controller
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


public function logosocial()
    {
        $logosocial = Logosocial::all();

        return view('backoffice.logosocial.logosocial',compact('logosocial'));
        
 


    }

public function create(Request $request)
    {

        // dd($request);
      $logosocial = new Logosocial();
        $logosocial->name = $request->name;
        $logosocial->detail = $request->detail;
         if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
          
            $request->file('image')->move(storage_path().'/picture_logosocial',$filename);


            $logosocial->image = $filename;
        } else {
      

       $logosocial->image = 'download.jpg';
            //return back()->with('status','noimage');

        }
        $logosocial->save();
        return redirect()->to('backoffice/logosocial')->with('success', 'success');
    }


public function logosocialform()
    {
        
        return view('backoffice.logosocial.create');
    }

public function edit($id)
    {

        $logosocial=DB::table('logosocial')->where('id',$id)->first();

        return view('backoffice.logosocial.edit',['logosocial'=>$logosocial]);
        //
    }
public function updatelogosocial(Request $request)
    {
        
   //dd($request);
          if ($request->file('image')) {
        $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $logosocial=Logosocial::where('id',$id)->first();
       
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
               
            $request->file('image')->move(storage_path().'/picture_logosocial',$filename);
            $logosocial->image = $filename;
             $logosocial->name = $request->name;
        $logosocial->detail = $request->detail;
         $logosocial->save();
        } else {
      
       $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

         $logosocial=Logosocial::where('id',$id)->first();

       $logosocial->name = $request->name;
        $logosocial->detail = $request->detail;
          $logosocial->save();
        ///return back()->with('status','noimage');

        }
     

    return redirect()->to('backoffice/logosocial');

    }


public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'detail' => 'required',
 ]);

        $array=array(
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
           'image' =>$request->file('fileToUpload')->store('image','public'),
            'created_at'=>new Datetime()
        
    );
    DB::table('logosocial')->where('id',$id)->update($array);
    return redirect('/logosocial');
        
         return redirect()->to('backoffice/logosocial')->with('success', 'success');
    }

    public function del(Request $request)
    {
 

 //dd($request);

	
	 
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('logosocial')->where('id',$id)->delete();
        return redirect()->to('backoffice/logosocial')->with('success', 'success');

	}



}