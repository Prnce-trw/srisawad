<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vision;

use DB;

use File;
class visionController extends Controller
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


public function vision()
    {
        $vision = Vision::all();
        
        return view('backoffice.vision.vision',compact('vision'));


    }


public function create(Request $request)
    {
		
		///dd($request);
      $vision = new Vision();
        $vision->name = $request->name;
          $vision->detail = $request->detail;
          $vision->detail2 = $request->detail2;
          
        if ($request->file('image')) {
            $filename =  time().'.'.$request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/picture_vision',$filename);
            $vision->image = $filename;
        } else {
      
            
 $vision->image = 'download.jpg';

dd(storage_path());


            //return back()->with('status','noimage');

        }
        $vision->save();
        return redirect()->to('backoffice/vision')->with('success', 'success');
    }


public function visionform()
    {
        
        return view('backoffice.vision.create');
    }

public function edit($id)
    {

        $vision=DB::table('vision')->where('id',$id)->first();

        return view('backoffice.vision.edit',['vision'=>$vision]);
        //
    }
public function updatevision(Request $request)
    {
    // dd($request);
     if ($request->file('image')) {
            $id = $request->id;
            $name = $request->name;
            $detail = $request->detail;
            $vision=Vision::where('id',$id)->first();
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/picture_vision',$filename);
            $vision->image = $filename;
            $vision->name = $request->name;
            $vision->detail = $request->detail;
            $vision->detail2 = $request->detail2;
            $vision->save();
        } else {
            $id = $request->id;
            $name = $request->name;
            $detail = $request->detail;
            $detail2 = $request->detail2;

            $vision=Vision::where('id',$id)->first();
            $vision->name = $request->name;
            $vision->detail = $request->detail;
            $vision->detail2 = $request->detail2;

 $vision->save();
        }
       

    return redirect()->to('backoffice/vision');

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
    DB::table('detail')->where('id',$id)->update($array);
    return redirect('/detail');
        
         return redirect()->to('backoffice/detail')->with('success', 'success');
    }



    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('vision')->where('id',$id)->get();
        File::delete('storage/picture_vision'.$picture[0]->image);
//dd($picture);


        DB::table('vision')->where('id',$id)->delete();
        return redirect()->to('backoffice/vision')->with('success', 'success');
    }





   


}