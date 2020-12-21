<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Detailcredit;

use DB;

//use File;
class detailcreditController extends Controller
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


public function detailcredit()
    {
      $detailcredit = Detailcredit::all();
        
        return view('backoffice.detailcredit.detailcredit',compact('detailcredit'));



    }
public function detailcreditform()
    {
        
        return view('backoffice.detailcredit.create');
    }
public function create(Request $request)
    {
        //dd($request);
      $detailcredit = new Detailcredit();
        $detailcredit->name = $request->name;
		$detailcredit->detail = $request->detail;
        if ($request->file('image')) {
            $filename =  time().'.'.$request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/picture_detailcredit',$filename);
            $detailcredit->image = $filename;
        } else {
      
            
 $detailcredit->image = 'download.jpg';

            //return back()->with('status','noimage');

        }
        $detailcredit->save();
        return redirect()->to('backoffice/detailcredit')->with('success', 'success');
    }

public function edit($id)
    {

        $detailcredit=DB::table('detailcredit')->where('id',$id)->first();

        return view('backoffice.detailcredit.edit',['detailcredit'=>$detailcredit]);
   
    }
	
	public function updatedetailcredit(Request $request)
    {
        
     if ($request->file('image')) {
            $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $detailcredit=Detailcredit::where('id',$id)->first();
   
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/picture_detailcredit',$filename);
            $detailcredit->image = $filename;
             $detailcredit->name = $request->name;
        $detailcredit->detail = $request->detail;

 $detailcredit->save();

        } else {
      
            $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;
$detailcredit=Detailcredit::where('id',$id)->first();
       $detailcredit->name = $request->name;
        $detailcredit->detail = $request->detail;
 $detailcredit->save();
        }
       

    return redirect()->to('backoffice/detailcredit');

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
    DB::table('detailcredit')->where('id',$id)->update($array);
    return redirect('/detailcredit');
        
         return redirect()->to('backoffice/detailcredit')->with('success', 'success');
    }



   public function del(Request $request)
    {

        
        $id = $request->input('id');
       // $picture = DB::table('detailcredit')->where('id',$id)->get();
      // File::delete('storage/picture_detailcredit'.$picture[0]->image);
//dd($picture);


        DB::table('detailcredit')->where('id',$id)->delete();
        return redirect()->to('backoffice/detailcredit')->with('success', 'success');
    }













}