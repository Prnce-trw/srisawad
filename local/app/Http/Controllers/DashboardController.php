<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;
use App\User;


use DB;

use File;
class DashboardController extends Controller
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


public function banner()
    {
        $banners = Banner::all();
        
        return view('backoffice.banner.banner',compact('banners'));


    }

public function create(Request $request)
    {
        
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->detail = $request->detail;



        if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
         
        
            $request->file('image')->move(storage_path().'/picture',$filename);
          //dd($filename);
            $banner->image = $filename;
        } else {
            $banner->image = 'download.jpg';
            //return back()->with('status','noimage');

        }


        $banner->save();
        return redirect()->to('backoffice/banner')->with('success', 'success');
    }







    ///// ฟอร์มกรอกข้อมูล

public function createform()
    {
        
        return view('backoffice.banner.create');
    }

public function edit($id)
    {

        $product=DB::table('banner')->where('id',$id)->first();

        return view('backoffice.banner.edit',['product'=>$product]);
        //
    }
public function updatebanner(Request $request)
    {
    
        if ($request->file('image')) {
            $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;
$product=Banner::where('id',$id)->first();
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            // dd($filename);
            $request->file('image')->move(storage_path().'/picture',$filename);
            // dd($request);
            $product->image = $filename;
            $product->name = $request->name;
        $product->detail = $request->detail;

            $product->save();
        } 
        else{

        $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $product=Banner::where('id',$id)->first();
        
        $product->name = $request->name;
        $product->detail = $request->detail;
         $product->save();


        }
        return redirect()->to('backoffice/banner');

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
    DB::table('banner')->where('id',$id)->update($array);
    return redirect('/banner');
        
         return redirect()->to('backoffice/banner')->with('success', 'success');
    }



    public function delete(Request $request)
    {

        //dd($request);
        $id = $request->input('id');
        $picture = DB::table('banner')->where('id',$id)->get();
        File::delete('storage/picture'.$picture[0]->image);



        DB::table('banner')->where('id',$id)->delete();
        return redirect()->to('backoffice/banner')->with('success', 'success');
    }






    public function target()
    {
      
        return view('backoffice.target.target');
    }









 public function credits()
    {
        
        return view('backoffice.credits.credits');
    }


public function creditsform()
    {
        
        return view('backoffice.credits.create');
    }










 public function article()
    {
        
        return view('backoffice.article.article');
    }



public function articleform()
    {
        
        return view('backoffice.article.create');


    }
    






}