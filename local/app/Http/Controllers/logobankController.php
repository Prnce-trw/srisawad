<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Logobank;

use DB;

use File;


class logobankController extends Controller
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


public function logobank()
    {
        $logobank = Logobank::all();

        return view('backoffice.logobank.logobank',compact('logobank'));
        
 


    }

public function create(Request $request)
    {

        // dd($request);
      $logobank = new Logobank;
   
         if ($request->file('image'))
          {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/picture_logobank',$filename);
            $logobank->image = $filename;
            
          
		  
        } else {
      
            $logobank->image = 'download.jpg';

        }

        if ($request->file('upload_file')){
            $filename1 = time() .'.' . $request->file('upload_file')->getClientOriginalExtension();
            $request->file('upload_file')->move(storage_path().'/pdf_files',$filename1);
            $logobank->upload_file = $filename1;
        }else{
            $logobank->upload_file = "download.pdf";
        }

    
        $logobank->save();
        return redirect()->to('backoffice/logobank')->with('success', 'success');
    }
	
	


public function logobankform()
    {
        
        return view('backoffice.logobank.create');
    }

public function edit($id)
    {

        $logobank=DB::table('logobank')->where('id',$id)->first();

        return view('backoffice.logobank.edit',['logobank'=>$logobank]);
        //
    }
public function updatelogobank(Request $request)
    {
        $id = $request->id;
        $logobank=Logobank::where('id',$id)->first();
        if ($request->file('image')) {
                $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(storage_path().'/picture_logobank',$filename);
                $logobank->image = $filename;
        }

        if ($request->file('upload_file')){
            $filename1 = time() .'.' . $request->file('upload_file')->getClientOriginalExtension();
            $request->file('upload_file')->move(storage_path().'/pdf_files',$filename1);
            $logobank->upload_file = $filename1;
        }
     
        
        $logobank->save();
    return redirect()->to('backoffice/logobank');

    }


/*public function update(Request $request, $id)
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
    DB::table('target')->where('id',$id)->update($array);
    return redirect('/target');
        
         return redirect()->to('backoffice/target')->with('success', 'success');
    }*/

   public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('logobank')->where('id',$id)->delete();
        return redirect()->to('backoffice/logobank')->with('success', 'success');
    }




}