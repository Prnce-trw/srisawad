<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Target;

use DB;

use File;
class targetController extends Controller
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


public function target()
    {
        $target = Target::all();

        return view('backoffice.target.target',compact('target'));
        
 


    }

public function create(Request $request)
    {

         //dd($request);
      $target = new Target();
        $target->name = $request->name;
        $target->detail = $request->detail;
         if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/picture_target',$filename);
            $target->image = $filename;
        }else{
            $target->image = "download.jpg";
        }
        
        
        $target->save();
        return redirect()->to('backoffice/target')->with('success', 'success');
    }

	


public function targetform()
    {
        


$target=DB::table('target')->get();
$c = 0;
// dd(count($target));
if ($target!==0) {
    foreach ($target as $key => $targets) {
    if ($targets->image!==null||$targets->image!=='') {
        $c = 1;    
    }
    
    }
}

// dd($c);
        return view('backoffice.target.create',compact('c'));
    }

public function edit($id)
    {

        $target=DB::table('target')->where('id',$id)->first();

        return view('backoffice.target.edit',['target'=>$target]);
        //
    }
public function update_target(Request $request)
    {
        
     if ($request->file('image')) {
             $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $target=Target::where('id',$id)->first();
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
               
            $request->file('image')->move(storage_path().'/picture_target',$filename);
            $target->image = $filename;

              $target->name = $request->name;
        $target->detail = $request->detail;
        $target->save();
        } else {

        $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

            $target=Target::where('id',$id)->first();
            $target->name = $request->name;
            $target->detail = $request->detail;
            $target->save();
        }
        

    return redirect()->to('backoffice/target');

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
    DB::table('target')->where('id',$id)->update($array);
    return redirect('/target');
        
         return redirect()->to('backoffice/target')->with('success', 'success');
    }

    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('target')->where('id',$id)->get();
        File::delete('storage/picture_target'.$picture[0]->image);
//dd($picture);


        DB::table('target')->where('id',$id)->delete();
        return redirect()->to('backoffice/target')->with('success', 'success');
    }






}