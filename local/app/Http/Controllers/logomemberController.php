<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Logomember;

use DB;

//use File;
class logomemberController extends Controller
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


public function logomember()
    {
      $logomember = Logomember::all();
        
        return view('backoffice.logomember.logomember',compact('logomember'));



    }
public function logomemberform()
    {
        
        return view('backoffice.logomember.create');
    }
public function create(Request $request)
    {
        //dd($request);
      $logomember = new Logomember();
        $logomember->name = $request->name;
        $logomember->detail = $request->detail;
        if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
          
            $request->file('image')->move(storage_path().'/picture_logomember',$filename);


            $logomember->image = $filename;
        } else {
      

       $logomember->image = 'download.jpg';
            //return back()->with('status','noimage');

        }
        $logomember->save();
        return redirect()->to('backoffice/logomember')->with('success', 'success');
    }




public function edit($id)
    {

        $logomember=DB::table('logomember')->where('id',$id)->first();

        return view('backoffice.logomember.edit',['logomember'=>$logomember]);
        //
    }
public function updatelogomember(Request $request)
    { 
        
        if($request->status == "on"){
            $status = 1;
        }else{
            $status = 0;
        }
    
        $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $logomember =    Logomember::find($id);

        if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();   
            $request->file('image')->move(storage_path().'/picture_logomember',$filename);
            $logomember->image = $filename;
        }
       
        $logomember->name = $request->name;
        $logomember->detail = $request->detail;
        $logomember->status = $status;
        $logomember->save();

       
     

        return redirect()->to('editlogomember/1');

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
            'created_at'=>new Datetime()
        
    );
    DB::table('logomember')->where('id',$id)->update($array);
    return redirect('/logomember');
        
         return redirect()->to('editlogomember/1')->with('success', 'success');
    }



   public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('detailcredit')->where('id',$id)->get();
        //File::delete('storage/picture_detailcredit'.$picture[0]->image);
//dd($picture);


       DB::table('logomember')->where('id',$id)->delete();
        return redirect()->to('backoffice/logomember')->with('success', 'success');
    }




}