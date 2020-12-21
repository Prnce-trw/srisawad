<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articlebanner;

use DB;

use File;
class articlebannerController extends Controller
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


public function articlebanner()
    {
        $articlebanner = Articlebanner::all();
        
        return view('backoffice.articlebanner.articlebanner',compact('articlebanner'));


    }


/*public function create(Request $request)
    {
		
		//dd($request);
      $articlebanner = new Articlebanner();
        $articlebanner->name = $request->name;
        if ($request->file('image')) {
            $filename =  time().'.'.$request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'\picture_articlebanner',$filename);
            $articlebanner->image = $filename;
        } else {
      
            
 $articlebanner->image = 'download.jpg';

            //return back()->with('status','noimage');

        }
        $articlebanner->save();
        return redirect()->to('backoffice/articlebanner')->with('success', 'success');
    }


public function articlebannerform()
    {
        
        return view('backoffice.articlebanner.create');
    }*/

public function edit($id)
    {

        $articlebanner=DB::table('articlebanner')->where('id',$id)->first();

        return view('backoffice.articlebanner.edit',['articlebanner'=>$articlebanner]);
        //
    }
public function updatearticlebanner(Request $request)
    {
        //dd($request);
      
            $id = $request->id;
            $name = $request->name;
            $name_detail = $request->name_detail;
            $detail = $request->detail;
            $articlebanner=Articlebanner::where('id',$id)->first();

            if ($request->file('image')) {
                $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(storage_path().'/picture_articlebanner',$filename);
                $articlebanner->image = $filename;
            } 

         
            $articlebanner->name = $request->name;
            $articlebanner->name_detail = $request->name_detail;
            $articlebanner->detail = $request->detail;
            $articlebanner->save();


            return redirect()->to('editarticles/1');

    }



public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'name_detail' => 'required',
            'detail' => 'required',
 ]);

        $array=array(
            'name' => $request->input('name'),
            'name_detail' => $request->input('name_detail'),
            'detail' => $request->input('detail'),
           'image' =>$request->file('fileToUpload')->store('image','public'),
            'created_at'=>new Datetime()
        
    );
    DB::table('articlebanner')->where('id',$id)->update($array);
    return redirect('/articlebanner');
        
         return redirect()->to('editarticlebanner/1')->with('success', 'success');
    }



    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('articlebanner')->where('id',$id)->get();
        File::delete('storage/picture_articlebanner'.$picture[0]->image);
//dd($picture);


        DB::table('articlebanner')->where('id',$id)->delete();
        return redirect()->to('backoffice/articlebanner')->with('success', 'success');
    }





   


}