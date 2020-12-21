<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Downloaddoc;

use DB;

use File;
class downloaddocController extends Controller
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


public function downloaddoc()
    {
        $downloaddoc = Downloaddoc::all();
        
        return view('backoffice.downloaddoc.downloaddoc',compact('downloaddoc'));


    }

public function create(Request $request)
    {
        // dd($request->file('image'));
        $downloaddoc = new downloaddoc();
        $downloaddoc->name = $request->name;
   
        if ($request->file('image')) {
          
            $filename2 =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/downloaddoc',$filename2);
          
            $filename = $filename2;
        } else {
            // dd(2);
             $filename = 'download.jpg';
        }
        $downloaddoc->image = $filename;
        $downloaddoc->save();
        return redirect()->to('backoffice/downloaddoc')->with('success', 'success');
    }


public function downloaddocform()
    {
        
        return view('backoffice.downloaddoc.create');
    }

public function edit($id)
    {

        $downloaddoc=DB::table('downloaddoc')->where('id',$id)->first();

        return view('backoffice.downloaddoc.edit',['downloaddoc'=>$downloaddoc]);
        //
    }
public function updatedownloaddoc(Request $request)
    {
        
     if ($request->file('image')) {
            $id = $request->id;
        $name = $request->name;
      
        $downloaddoc=Downloaddoc::where('id',$id)->first();
   
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/downloaddoc',$filename);
            $downloaddoc->image = $filename;
             $downloaddoc->name = $request->name;


 $downloaddoc->save();

        } else {
      
            $id = $request->id;
        $name = $request->name;
$downloaddoc=Downloaddoc::where('id',$id)->first();
       $downloaddoc->name = $request->name;
        $downloaddoc->detail = $request->detail;
 $downloaddoc->save();
        }
       

    return redirect()->to('backoffice/downloaddoc');

    }



public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
 ]);

        $array=array(
            'name' => $request->input('name'),
           'image' =>$request->file('fileToUpload')->store('image','public'),
            'created_at'=>new Datetime()
        
    );
    DB::table('downloaddoc')->where('id',$id)->update($array);
    return redirect('/downloaddoc');
        
         return redirect()->to('backoffice/downloaddoc')->with('success', 'success');
    }



    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('downloaddoc')->where('id',$id)->get();
        File::delete('storage/downloaddoc'.$picture[0]->image);
//dd($picture);


        DB::table('downloaddoc')->where('id',$id)->delete();
        return redirect()->to('backoffice/downloaddoc')->with('success', 'success');
    }







}