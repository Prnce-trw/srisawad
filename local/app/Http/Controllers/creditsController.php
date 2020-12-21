<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Credits;

use DB;

use File;
class creditsController extends Controller
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


public function credits()
    {
       // $credits = Credits::all();
        
       // return view('backoffice.credits.credits',compact('credits'));

         $va = [];
        $qual = [];
        // $credits = Credits::all();
        // $credits = DB::table('typecredits')
        // ->leftjoin('credits','credits.credittype_id','typecredits.id')
        $credits = DB::table('credits')
        ->leftjoin('typecredits','typecredits.id','credits.credittype_id')
        ->select('typecredits.image as typeimage','typecredits.name','credits.*')->get()->toArray();
        foreach($credits as $index =>$value){
            $creditsnumber = str_replace('"',"",$credits[$index]->qualification_id);
            $creditsnumber = explode(",", $creditsnumber);
            $qualification = DB::table('qualification')->whereIn('id',$creditsnumber)->get()->toArray();
        foreach($qualification as $indexx =>$valuee){
            array_push($va,$qualification[$indexx]->name);
        }
        $va = implode(" ",$va);
        array_push($qual,array("qualification"=>$va));
        $va = [];
      

        }
        $qual = DB::table('qualification')->get()->toArray();
        return view('backoffice.credits.credits',compact('credits','qual'));


    }

public function create(Request $request)
    {

         //dd($request);
      //dd($request);
      $credits = new Credits();
       
        $credits->credittype_id     = $request->creditstype;
        $credits->qualification_id  = ",".$request->qualificationvalue;
        $credits->document_id       = ",".$request->documentvalue;
        $credits->bank_id           = ",".$request->paymentvalue;
        $credits->download_id       = ",".$request->downloadvalue;
        $credits->name_credit       = ",".$request->name_creditvalue;
        
        
         if ($request->file('image')) {
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path().'/picture_credits',$filename);
            $credits->image = $filename;
        } else {
           $credits->image = 'download.jpg';
        }
        
        $credits->select_credit = $request->select_credit;;
        $credits->save();
        DB::table('typecredits')->where('id',$request->creditstype);
        return redirect()->to('backoffice/credits')->with('success', 'success');
    }


public function creditsform()
    {
        
$document = DB::table('document')->get()->toArray();
        $typecredit = DB::table('typecredits')->get()->toArray();
        
        $detailcredit = DB::table('detailcredit')->get()->toArray();

        $qualification = DB::table('qualification')->get()->toArray();
        $logobank = DB::table('logobank')->get()->toArray();
        $downloaddoc = DB::table('downloaddoc')->get()->toArray();
        return view('backoffice.credits.create',['detailcredit'=>$detailcredit,'document'=>$document,'typecredits'=>$typecredit,'qualification'=>$qualification,'logobank'=>$logobank,'downloaddoc'=>$downloaddoc]);
        
        //return view('backoffice.credits.create');




        ///return view('backoffice.credits.create');
    }

public function edit($id)
    {


        $credits=DB::table('credits')->where('id',$id)->first();
        $document = DB::table('document')->get()->toArray();
        $typecredits = DB::table('typecredits')
        ->where('id',$credits->credittype_id)
        ->get()->toArray();

        $creditstype_old = DB::table('typecredits')->where('id',$credits->credittype_id)->get();
        $qualification = DB::table('qualification')->get()->toArray();
        $logobank = DB::table('logobank')->get()->toArray();
        $detailcredit = DB::table('detailcredit')->get()->toArray();


// 
        $downloaddoc = DB::table('downloaddoc')->get()->toArray();

        return view('backoffice.credits.edit',['credits'=>$credits,
        'document'=>$document,'typecredits'=>$typecredits,'detailcredit'=>$detailcredit,
        'qualification'=>$qualification,'logobank'=>$logobank,'creditstype_old'=>$creditstype_old,
        'downloaddoc'=>$downloaddoc]);
        
        



        ///$credits=DB::table('credits')->where('id',$id)->first();

        //return view('backoffice.credits.edit',['credits'=>$credits]);
        //
    }
public function update_credits(Request $request)
    {
   
     
            $id = $request->id;
            $credits=Credits::where('id',$id)->first();
            if ($request->file('image')) {
                $filename = time().'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(storage_path().'/picture_credits',$filename);
                $credits->image = $filename;
            }
            $credits->credittype_id  = $request->creditstype;
            $credits->qualification_id = ",".$request->qualificationvalue;
            $credits->document_id = ",".$request->documentvalue;
            $credits->bank_id = ",".$request->paymentvalue;
            $credits->download_id = ",".$request->downloadvalue;
            $credits->name_credit = ",".$request->name_creditvalue;
            $credits->select_credit = $request->select_credit;;
            $credits->save();
        
       

    return redirect()->to('backoffice/credits');

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
    DB::table('credits')->where('id',$id)->update($array);
    return redirect('/credits');
        
         return redirect()->to('backoffice/credits')->with('success', 'success');
    }



    public function del(Request $request)
    {

       // dd($request);
        $id = $request->input('id');
        $picture = DB::table('credits')->where('id',$id)->get();
        File::delete('storage/picture_credits'.$picture[0]->image);



        DB::table('credits')->where('id',$id)->delete();
        return redirect()->to('backoffice/credits')->with('success', 'success');
    }



}