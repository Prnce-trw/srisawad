<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;
use File;
use App\Aboutbanner;
class AboutController extends Controller
{
  

    public function index(){
        $aboutbanners = DB::table('aboutbanner')->first();
        $data = array(
            'aboutbanners' => $aboutbanners
        );
        // dd($data);
        return view('backoffice.aboutbanner.index',$data);
    }






public function update(Request $request)
    {
      
      
        $id = $request->id;
        $name = $request->name;
        $name_detail = $request->name_detail;
        $detail = $request->detail;
        if( $id == "" ||  $id == null){
            // dd(1);
            $aboutbanner = new Aboutbanner;

            if ($request->file('image')) {
                $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(storage_path().'/picture_about',$filename);
            }else{
                $filename = "dowload.jpg";
            }
            // dd($filename);
            $aboutbanner->image         = $filename;
            $aboutbanner->name          = $name;
            $aboutbanner->name_detail   = $name_detail;
            $aboutbanner->detail        = $detail;
            $aboutbanner->save();

        }else{
            // dd(2);
            $aboutbanner = Aboutbanner::find(1);
            if ($request->file('image')) {
                $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(storage_path().'/picture_about',$filename);
                $aboutbanner->image         = $filename;
            }

          
            $aboutbanner->name          = $name;
            $aboutbanner->name_detail   = $name_detail;
            $aboutbanner->detail        = $detail;
            $aboutbanner->save();

        }
    //     $article=Article::where('id',$id)->first();
      
    //     if ($request->file('image')) {
    //         $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
    //         $request->file('image')->move(storage_path().'\picture_article',$filename);
    //     }else{
    //         $filename = "dowload.jpg";
    //     }

    //     $article->image = $filename;
    //     $article->name = $request->name;
    //     $article->detail = $request->detail;
    //     $article->save();


        return redirect()->to('/aboutindex');

    }





}