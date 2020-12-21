<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Images;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = DB::table('tb_images')->get();

        $data = array(
            'images' => $images,
        );
        return view('backoffice.images.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
      if($request->file('image')) {
        $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
        $test = $request->file('image')->move(storage_path().'/picture_images',$filename);

        $images = new Images();
        $images->im_path = $filename;
        $images->im_link = 'picture_images/'.$filename;

      }else{
        $filename = "";

        $images = new Images();
        $images->im_path = $filename;
        $images->im_link = 'picture_images/'.$filename;
      }

    
      $images->save();

       return redirect()->to('backoffice/images');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = DB::table('tb_images')->where('im_id',$id)->first();

        $data = array(
            'images' => $images,
        );
        return view('backoffice.images.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $images2 = Images::where('im_id',$id)->first();
  
        if ($request->file('image')) {
            $images = Images::where('im_id',$id)->first();
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $test = $request->file('image')->move(storage_path().'/picture_images',$filename);
            $images->im_path = $filename;
            $images->im_link ='picture_images/'.$filename;

        }else{
            $images = Images::where('im_id',$id)->first();
            $images->im_path = $images2->im_path;
            $images->im_link = $images2->im_link;
        }
        // dd($images);
        $images->save();
        return redirect()->to('backoffice/images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Images::where('im_id',$id)->delete();
        return redirect()->to('backoffice/images');
    }
}
