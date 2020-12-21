<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Newsbanner;

use DB;

use File;
class newbannerController extends Controller
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


public function newbanner()
    {
        $newbanner = Newsbanner::all();
        
        return view('backoffice.newbanner.newbanner',compact('newbanner'));


    }


/*public function create(Request $request)
    {
        
        //dd($request);
      $newbanner = new Newsbanner();
        $newbanner->name = $request->name;
        if ($request->file('image')) {
            $filename =  time().'.'.$request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'\picture_newbanner',$filename);
            $newbanner->image = $filename;
        } else {
      
            
 $newbanner->image = 'download.jpg';

            //return back()->with('status','noimage');

        }
        $newbanner->save();
        return redirect()->to('backoffice/newbanner')->with('success', 'success');
    }


public function newbannerform()
    {
        
        return view('backoffice.newbanner.create');
    }*/

public function edit($id)
    {

        $newbanner=DB::table('newbanner')->where('id',$id)->first();

        return view('backoffice.newbanner.edit',['newbanner'=>$newbanner]);
        //
    }
public function updatenewbanner(Request $request)
    {
       /// dd($request);
        
     if ($request->file('image')) {
            $id = $request->id;
        $name = $request->name;
         $name_detail = $request->name_detail;
          $detail = $request->detail;
        $newbanner=Newsbanner::where('id',$id)->first();
   
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/picture_newbanner',$filename);
            $newbanner->image = $filename;
             $newbanner->name = $request->name;
                $newbanner->name_detail = $request->name_detail;
                   $newbanner->detail = $request->detail;
//dd($filename);


 $newbanner->save();

        } else {
      
            $id = $request->id;
        $name = $request->name;
             $name_detail = $request->name_detail;
          $detail = $request->detail;
$newbanner=Newsbanner::where('id',$id)->first();
       $newbanner->name = $request->name;
        $newbanner->name_detail = $request->name_detail;
                   $newbanner->detail = $request->detail;
 $newbanner->save();
        }
       

    return redirect()->to('editnew/1');

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
    DB::table('newbanner')->where('id',$id)->update($array);
    return redirect('/editnewbanner/1');
        
         return redirect()->to('editnewbanner/1')->with('success', 'success');
    }



    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('newbanner')->where('id',$id)->get();
        File::delete('storage/picture_newbanner'.$picture[0]->image);
//dd($picture);


        DB::table('newbanner')->where('id',$id)->delete();
        return redirect()->to('backoffice/newbanner')->with('success', 'success');
    }





   


}