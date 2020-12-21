<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Footer;

use DB;


class footerController extends Controller
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


public function footer()
    {
        $footer = Footer::all();

        return view('backoffice.footer.footer',compact('footer'));
        
 


    }

public function edit($id)
    {

        $footer=DB::table('footer')->where('id',$id)->first();

        return view('backoffice.footer.edit',['footer'=>$footer]);
        //
    }
public function updatefooter(Request $request)
    {
        
//dd($request);
        $id = $request->id;
        $detail = $request->detail;
		$email = $request->email;
		$tel = $request->tel;
		$location = $request->location;
        $footer=Footer::where('id',$id)->first();
        $footer->detail = $request->detail;
        $footer->email = $request->email;
        $footer->tel = $request->tel;
        $footer->opencolse = $request->opencolse;
        $footer->location = $request->location;
  
  
  
        $footer->save();

    return redirect()->to('editfooter/1');

    }


	/*public function update(Request $request, $id)
    {
		
        $this->validate($request,[
            'detail' => 'required',
			'email' => 'required',
			'tel' => 'required',
			'location' => 'required',
            
 ]);

        $array=array(
            'detail' => $request->input('detail'),
			'email' => $request->input('email'),
			'tel' => $request->input('tel'),
			'location' => $request->input('location'),
            'created_at'=>new Datetime()
        
    );
    DB::table('footer')->where('id',$id)->update($array);
    return redirect('/footer');
        
         return redirect()->to('backoffice/footer')->with('success', 'success');
    }*/


   public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('footer')->where('id',$id)->delete();
        return redirect()->to('backoffice/footer')->with('success', 'success');
    }




}