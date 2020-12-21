<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Branch;

use DB;

//use File;
class branchController extends Controller
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


public function branch()
    {
      $branch = Branch::all();
        
        return view('backoffice.branch.branch',compact('branch'));



    }
public function branchform()
    {
        
        return view('backoffice.branch.create');
    }
public function create(Request $request)
    {
      /// dd($request);
      $branch = new Branch();
        $branch->name = $request->name;
		$branch->detail = $request->detail;
        $branch->tel = $request->tel;
        $branch->link = $request->location_link;
		$branch->location = $request->location;
        $branch->save();
        return redirect()->to('backoffice/branch')->with('success', 'success');
    }




public function edit($id)
    {

        $branch=DB::table('branch')->where('id',$id)->first();

        return view('backoffice.branch.edit',['branch'=>$branch]);
        //
    }
public function updatebranch(Request $request)
    {
   // dd($request);
   
        $id = $request->id;
        $name = $request->name;

        $branch=Branch::where('id',$id)->first();
        $branch->name = $request->name;
		$branch->detail = $request->detail;
        $branch->tel = $request->tel;
        $branch->link = $request->location_link;
		$branch->location = $request->location;
       
      // dd($qualification);
        $branch->save();

    return redirect()->to('backoffice/branch');


    }



public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
			'detail' => 'required',
			'tel' => 'required',
			'location' => 'required',
            
 ]);

        $array=array(
            'name' => $request->input('name'),
			'detail' => $request->input('detail'),
			'tel' => $request->input('tel'),
			'location' => $request->input('location'),
         
            'created_at'=>new Datetime()
        
    );
    DB::table('branch')->where('id',$id)->update($array);
    return redirect('/branch');
        
         return redirect()->to('backoffice/branch')->with('success', 'success');
    }



   public function del(Request $request)
    {

        
        $id = $request->input('id');
        //$picture = DB::table('qualification')->where('id',$id)->get();
       // File::delete('storage/picture_qualification'.$picture[0]->image);
//dd($picture);


        DB::table('branch')->where('id',$id)->delete();
        return redirect()->to('backoffice/branch')->with('success', 'success');
    }













}