<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Typecredits;

use DB;

use File;
class typecreditsController extends Controller
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


public function typecredits()
    {
        $typecredits = Typecredits::all();

        return view('backoffice.typecredits.typecredits',compact('typecredits'));
    

    }

public function create(Request $request)
    {

        $typecredits = new Typecredits();
        $typecredits->name = $request->name;
        
        if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
          
            $request->file('image')->move(storage_path().'/picture_typecredits',$filename);

            $typecredits->image = $filename;
        } else {
            $typecredits->image = '';
        }
        $typecredits->save();
        return redirect()->to('backoffice/type')->with('success', 'success');
    }


public function typecreditsform()
    {
        
        return view('backoffice.typecredits.create');
    }

public function edit($id)
    {

        $typecredits=DB::table('typecredits')->where('id',$id)->first();

        return view('backoffice.typecredits.edit',['typecredits'=>$typecredits]);
        //
    }
public function updatetypecredits(Request $request)
    {
       //  dd($request);
  
        $id = $request->id;

        
        $typecredits=Typecredits::where('id',$id)->first();
        if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/picture_typecredits',$filename);
            $typecredits->image = $filename;
        } else {
            $typecredits->image = '';
        }

        $typecredits->name = $request->name;
        $typecredits->save();
  
    return redirect()->to('backoffice/type');

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
    DB::table('new')->where('id',$id)->update($array);
    return redirect('/new');
        
         return redirect()->to('backoffice/new')->with('success', 'success');
    }

    public function del(Request $request)
    {
 

		
        $id = $request->input('id');
 


        DB::table('typecredits')->where('id',$id)->delete();
        return redirect()->to('backoffice/type')->with('success', 'success');
    }






}