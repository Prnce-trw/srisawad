<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use DB;

use File;
class articleController extends Controller
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


public function article()
    {
        $articles = Article::all();
        
        return view('backoffice.article.article',compact('articles'));


    }

public function create(Request $request)
    {
      $article = new Article();
        $article->name = $request->name;
        $article->detail = $request->detail;
        if ($request->file('image')) {
            $filename =  time().'.'.$request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/picture_article',$filename);
            $article->image = $filename;
        } else {
      
            
 $article->image = 'download.jpg';

            //return back()->with('status','noimage');

        }
        $article->save();
        return redirect()->to('backoffice/article')->with('success', 'success');
    }


public function articleform()
    {
        
        return view('backoffice.article.create');
    }

public function edit($id)
    {

        $articles=DB::table('article')->where('id',$id)->first();

        return view('backoffice.article.edit',['articles'=>$articles]);
        //
    }
public function update_article(Request $request)
    {
        
     if ($request->file('image')) {
            $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;

        $article=Article::where('id',$id)->first();
   
            $filename = time() .'.' . $request->file('image')->getClientOriginalExtension();
           
            $request->file('image')->move(storage_path().'/picture_article',$filename);
            $article->image = $filename;
             $article->name = $request->name;
        $article->detail = $request->detail;

 $article->save();

        } else {
      
            $id = $request->id;
        $name = $request->name;
        $detail = $request->detail;
$article=Article::where('id',$id)->first();
       $article->name = $request->name;
        $article->detail = $request->detail;
 $article->save();
        }
       

    return redirect()->to('backoffice/article');

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
    DB::table('article')->where('id',$id)->update($array);
    return redirect('/article');
        
         return redirect()->to('backoffice/article')->with('success', 'success');
    }



    public function del(Request $request)
    {

        
        $id = $request->input('id');
        $picture = DB::table('article')->where('id',$id)->get();
        File::delete('storage/picture_article'.$picture[0]->image);
//dd($picture);


        DB::table('article')->where('id',$id)->delete();
        return redirect()->to('backoffice/article')->with('success', 'success');
    }





    public function target()
    {
       //$target = Target::all();
     

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




}