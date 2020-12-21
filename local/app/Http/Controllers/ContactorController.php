<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contactor;

use DB;

use File;
class ContactorController extends Controller
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


public function contactor()
    {
        $contactor = Contactor::all();
        
        return view('backoffice.contactor.contactor',compact('contactor'));


    }

public function edit($id)
    {
     
        $contactor=DB::table('contactor')->where('id',$id)->first();

        return view('backoffice.contactor.edit',['contactor'=>$contactor]);
        
    }
public function updatecontactor(Request $request)
    {
        // dd($request);
    
        
        $id = $request->id;
        $name = $request->name;
		$name_company = $request->name_company;
		$address_company = $request->address_company;
		$email = $request->email;
		$service = $request->service;
		$web = $request->web;
		$contact = $request->contact;
        
        if($request->status == "on"){
            $status = 1;
        }else{
            $status = 0;
        }


        $contactor = Contactor::where('id',$id)->first();
 
        if ($request->file('image1')) {
            $filename1 = time() .'.' . $request->file('image1')->getClientOriginalExtension();
            $request->file('image1')->move(storage_path().'/picture_contactor',$filename1);
            $contactor->image1 = $filename1;
        } 
        
        
        if($request->file('image')){
           
            $filename2 = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/picture_contactor',$filename2);
            $contactor->image2 = $filename2;
        }
        
       
      
		$contactor->name = $name;
        $contactor->name_company = $name_company;
        $contactor->address_company = $address_company;
		$contactor->email = $email;
        $contactor->service = $service;
        $contactor->map = $request->map;
		$contactor->web = $web;
        $contactor->contact = $contact;
        $contactor->status = $status;
        $contactor->save();

        return redirect()->to('editcontactors/2');

	 }

public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
			'name_company' => 'required',
			'address_company' => 'required',
			'email' => 'required',
			'service' => 'required',
			'web' => 'required',
			'contact' => 'required',
 ]);

        $array=array(
            'name' => $request->input('name'),
			'name_company' => $request->input('name_company'),
			'address_company' => $request->input('address_company'),
			'email' => $request->input('email'),
			'service' => $request->input('service'),
			'web' => $request->input('web'),
			'contact' => $request->input('contact'),
           'image' =>$request->file('fileToUpload')->store('image','public'),
		     'image1' =>$request->file('fileToUpload')->store('image1','public'),
            'created_at'=>new Datetime()
        
    );
    DB::table('contactor')->where('id',$id)->update($array);
    return redirect('/contactor');
        
         return redirect()->to('editcontactors/2')->with('success', 'success');
    }

    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('contactor')->where('id',$id)->get();
        File::delete('storage/picture_contactor'.$picture[0]->image);
//dd($picture);


        DB::table('contactor')->where('id',$id)->delete();
        return redirect()->to('editcontactors/2')->with('success', 'success');
    }





   


}