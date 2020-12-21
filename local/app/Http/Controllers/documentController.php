<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Document;

use DB;

//use File;
class documentController extends Controller
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


public function document()
    {
      $document = Document::all();
        
        return view('backoffice.document.document',compact('document'));



    }
public function documentform()
    {
        
        return view('backoffice.document.create');
    }
public function create(Request $request)
    {
        //dd($request);
      $document = new Document();
        $document->name = $request->name;
        
        $document->save();
        return redirect()->to('backoffice/document')->with('success', 'success');
    }




public function edit($id)
    {

        $document=DB::table('document')->where('id',$id)->first();

        return view('backoffice.document.edit',['document'=>$document]);
        //
    }
public function updatedocument(Request $request)
    {
   // dd($request);
   
        $id = $request->id;
        $name = $request->name;

        $document=Document::where('id',$id)->first();
        $document->name = $request->name;
       
      // dd($qualification);
        $document->save();

    return redirect()->to('backoffice/document');


    }



public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            
 ]);

        $array=array(
            'name' => $request->input('name'),
         
            'created_at'=>new Datetime()
        
    );
    DB::table('document')->where('id',$id)->update($array);
    return redirect('/document');
        
         return redirect()->to('backoffice/document')->with('success', 'success');
    }



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