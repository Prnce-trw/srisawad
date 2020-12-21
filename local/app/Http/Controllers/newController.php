<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use DB;

use File;
class newController extends Controller
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


public function new()
    {
        $new = News::all();

        return view('backoffice.new.new',compact('new'));
        
 


    }

public function create(Request $request)
    {

        // dd($request);
      $new = new News();
        $new->name = $request->name;
        $new->detail = $request->detail;
         if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
          
            $request->file('image')->move(storage_path().'/picture_new',$filename);


            $new->image = $filename;
        } else {
      

       $new->image = 'download.jpg';
            //return back()->with('status','noimage');

        }
        $new->save();
        return redirect()->to('backoffice/new')->with('success', 'success');
    }


public function newform()
    {
        
        return view('backoffice.new.create');
    }

public function edit($id)
    {

        $new=DB::table('new')->where('id',$id)->first();

        return view('backoffice.new.edit',['new'=>$new]);
        //
    }
public function updatenew(Request $request)
    {
        
   //dd($request);
          if ($request->file('image')) {
        $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $new=News::where('id',$id)->first();
       
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
               
            $request->file('image')->move(storage_path().'/picture_new',$filename);
            $new->image = $filename;
             $new->name = $request->name;
        $new->detail = $request->detail;
         $new->save();
        } else {
      
       $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

         $new=News::where('id',$id)->first();

       $new->name = $request->name;
        $new->detail = $request->detail;
          $new->save();
        ///return back()->with('status','noimage');

        }
     

    return redirect()->to('backoffice/new');

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
    DB::table('new')->where('id',$id)->update($array);
    return redirect('/new');
        
         return redirect()->to('backoffice/new')->with('success', 'success');
    }

    public function del(Request $request)
    {
 

 //dd($request);
        $id = $request->input('id');
        $picture = DB::table('new')->where('id',$id)->get();
        File::delete('storage/picture_new'.$picture[0]->image);
//dd($picture);


        DB::table('new')->where('id',$id)->delete();
        return redirect()->to('backoffice/new')->with('success', 'success');
    }






}