<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paymentmethods;

use DB;

//use File;
class paymentmethodController extends Controller
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


public function paymentmethod()
    {
      $paymentmethod = Paymentmethods::all();
        
        return view('backoffice.paymentmethod.paymentmethod',compact('paymentmethod'));



    }
/*public function documentform()
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
    }*/




public function edit($id)
    {

        $paymentmethod=DB::table('paymentmethod')->where('id',$id)->first();

        return view('backoffice.paymentmethod.edit',['paymentmethod'=>$paymentmethod]);
        //
    }
public function updatepaymentmethod(Request $request)
    {
   //dd($request);
   
        $id = $request->id;
        $name = $request->name;

        $paymentmethod=Paymentmethods::where('id',$id)->first();
        $paymentmethod->name = $request->name;
       
      // dd($qualification);
        $paymentmethod->save();

    return redirect()->to('backoffice/paymentmethod');


    }



/*public function update(Request $request, $id)
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


        DB::table('document')->where('id',$id)->delete();
        return redirect()->to('backoffice/document')->with('success', 'success');
    }*/














}