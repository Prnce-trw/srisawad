<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Credits;
use App\Qualification;
use App\Document;
use App\Article;
use App\News;
use App\Target;
use App\Paymentmethods;
use App\Footer;
use App\Downloaddoc;
use App\Contactor;
use App\Branch;
use App\Vision;
use App\Contact;
use App\CreditContact;
use App\Articlebanner;
use App\Detailcredit;
use App\Newsbanner;
use App\Typecredits;
use App\Logobank;
use App\Contactorfooter;
use App\Creditfooter;
use App\Logosocial;
use App\Logomember;
use App\Aboutbanner;

use Mail;
use DB;
use File;

class FontendController extends Controller
{
    public function index()
    {
        $footer = Footer::all();
        $banners = Banner::all();
        $new = News::OrderBy('id','desc')->get();
        $article = Article::OrderBy('id','desc')->get();

        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();


        $logosocial = Logosocial::all();



        $credits = DB::table('typecredits')
        ->select('typecredits.*','credits.*','typecredits.id as type_id')
        ->leftjoin('credits','credits.credittype_id','typecredits.id')
        ->inRandomOrder()->first();
       // dd($credits);
        
        $creditsnumber = str_replace('"',"",$credits->qualification_id);
        $creditsnumber1 = str_replace('"',"",$credits->document_id);
        $creditsnumber2 = str_replace('"',"",$credits->name_credit);

        $creditsnumber = explode(",", $creditsnumber);
        $creditsnumber1 = explode(",", $creditsnumber1);
        $creditsnumber2 = explode(",", $creditsnumber2);

        // dd($credits);

        $qualification = DB::table('qualification')
        ->whereIn('id',$creditsnumber)->get()->toArray();

        $document = DB::table('document')
        ->whereIn('id',$creditsnumber1)->get()->toArray();

        $detailcredits  = DB::table('detailcredit')
        ->whereIn('id',$creditsnumber2)->get()->toArray();
        
        $newbanner = DB::table('newbanner')->first();
        $articlebanner = DB::table('articlebanner')->first();
         
       $data = array(
        'credits'=>$credits,
        'detailcredits'=>$detailcredits,
        'qualification'=>$qualification,
        'document'=>$document,
        'banners' => $banners,
        'footer'=>$footer,
        'banners'=>$banners,
        'new'=>$new,
        'article'=>$article,
        'contactorfooter'=>$contactorfooter,
        'creditfooter'=>$creditfooter,
        'logosocial'=>$logosocial,
        'newbanner'=>$newbanner,
        'articlebanner'=>$articlebanner,
       );


 //$logosocial = Logosocial::all();



        // $qualification = Qualification::latest()->first();$creditfooter = Creditfooter::all();
        // $document = Document::latest()->first();
        // $credits = Credits::latest()->first();
        // $detailcredit = Detailcredit::latest()->first();



        // $footer = Footer::all();
        // $banners = Banner::all();
        // $new = News::all();
        // $article = Article::all();

        // // $typecredits = DB::table('typecredits')->where('status_use',0)->get();
        return view('index',$data);
    }

    public function credit()
    {

        $logosocial = Logosocial::all();

        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
    	$downloaddoc = Downloaddoc::all();
        $paymentmethod = Paymentmethods::all();
        $qualification = Qualification::all();
        $document = Document::all();
        $credits = Credits::all();
        $logobanks = DB::table('logobank')->get();


        return view('credit',compact('credits','qualification','document','paymentmethod','downloaddoc','logobanks','contactorfooter','creditfooter','logosocial'));
}




public function getcreditByid(Request $request)
    {
         if($request->id == "all"){
            $resule = DB::table('credits')->get()->toArray();
        }else{
            $resule = DB::table('credits')
            ->where('credittype_id',$request->id)->get()->toArray();
        }
        return $resule;
    }
    public function getByid($id)
    {
        $credits = DB::table('typecredits')
                ->leftjoin('credits','credits.credittype_id','typecredits.id')
                ->select('typecredits.image as typeimage','typecredits.name','credits.*')
                ->where('typecredits.id',$id)
                ->first();
        //dd($credits);
        
        $creditsnumber = str_replace('"',"",$credits->qualification_id);
        $creditsnumber1 = str_replace('"',"",$credits->document_id);
        $creditsnumber2 = str_replace('"',"",$credits->bank_id);
        $creditsnumber3 = str_replace('"',"",$credits->download_id);
        $creditsnumber4 = str_replace('"',"",$credits->name_credit);
        $creditsnumber = explode(",", $creditsnumber);
        $creditsnumber1 = explode(",", $creditsnumber1);
        $creditsnumber2 = explode(",", $creditsnumber2);
        $creditsnumber3 = explode(",", $creditsnumber3);
        $creditsnumber4 = explode(",", $creditsnumber4);
  

        $qualification = DB::table('qualification')
        ->whereIn('id',$creditsnumber)->get()->toArray();

        $document = DB::table('document')
        ->whereIn('id',$creditsnumber1)->get()->toArray();

        $downloaddoc  = DB::table('downloaddoc')
        ->whereIn('id',$creditsnumber3)->get()->toArray();

        $logobanks  = DB::table('logobank')
        ->whereIn('id',$creditsnumber2)->get()->toArray();

        $detailcredits  = DB::table('detailcredit')
        ->whereIn('id',$creditsnumber4)->get()->toArray();
        
        
       $result = array(
        'credits'=>$credits,
        'detailcredits'=>$detailcredits,
        'qualification'=>$qualification,
        'document'=>$document,
        'logobanks'=>$logobanks,
        '$downloaddoc '=>$downloaddoc ,
       );

       $creditsType = DB::table('credittype')->where('status_use',1)->get();

        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $logosocial = Logosocial::all();
        $paymentmethods =  Paymentmethods::all();
        // return $result;
        return view('credit',compact('credits','qualification','document','logobanks','downloaddoc','creditsType','detailcredits','contactorfooter','creditfooter','logosocial','paymentmethods'));

    }
    public function register()
    {
        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $logosocial = Logosocial::all();

         $logomember = DB::table('logomember')->get();
        return view('register',compact('logomember','contactorfooter','creditfooter','logosocial'));
    }

    public function article()
    {


        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $articlebanner = Articlebanner::all();
         $logosocial = Logosocial::all();
        $banners = Banner::all();
        $article = Article::OrderBy('id','desc')->paginate(12);

        return view('article',compact('article','banners','articlebanner','contactorfooter','creditfooter','logosocial'));
    }

    public function news()
    {


$contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $logosocial = Logosocial::all();
   $newbanner = Newsbanner::all();
        $new = News::OrderBy('id','desc')->paginate(12);

        return view('news',compact('new','newbanner','contactorfooter','creditfooter','logosocial'));
        
    }

    public function  aboutus()
    {
		
        $target = Target::all();
        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $logosocial = Logosocial::all();
        $aboutbanner = Aboutbanner::all();
        $target2 = Target::where('image','!=','download.jpg')->get();

        $data = array(
            'target' => $target,
            'target2' => $target2,
            'contactorfooter' => $contactorfooter,
            'creditfooter' => $creditfooter,
            'logosocial' => $logosocial,
            'aboutbanner' => $aboutbanner,

        );
        
        return view('aboutus',$data);
    }
   
    public function missionvision()
    {
        $visions = Vision::all();
         $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $logosocial = Logosocial::all();

        return view('missionvision',compact('visions','contactorfooter','creditfooter','logosocial'));
    }
   
    public function contact()
    {
        $contactor = Contactor::all();
        $branchs   =  Branch::all();

         $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();
        $logosocial = Logosocial::all();
        return view('contact',compact('contactor','branchs','contactorfooter','creditfooter','logosocial'));
    }
    
    public function search_location($id)
    {
        
        $branchs   =  Branch::find($id);
        return  $branchs;
    }


    public function contact_save(Request $request)
    {
        $contactor = Contactor::find(2);
        

        $contact = new Contact();
        $contact->ct_status             =       $request->status_cus;
        $contact->ct_subject            =       $request->subject;
        $contact->ct_name               =       $request->name;
        $contact->ct_lastname           =       $request->lastname;
        $contact->ct_tel                =       $request->tel;
        $contact->ct_email              =       $request->email;
        $contact->ct_content            =       $request->detail;
        $contact->save();

        $contact_sand = Contact::find($contact->ct_id);
        $data = array(
            'contact_sand' =>  $contact_sand
        );
        
        if($contactor->status == 1){
            Mail::send('sendmail.mail', $data, function($message) use ($data) {
                $e_mail = trim($data['contact_sand']->ct_email);
                $message->to($e_mail, $data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname)->subject($data['contact_sand']->ct_subject.' ของ '.$data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname);
                $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            });
        }else{
              Mail::send('sendmail.mail', $data, function($message) use ($data) {
                $e_mail = trim($data['contact_sand']->ct_email);
                $message->to("kasanee.b@srisawadcapital.co.th", $data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname)->subject($data['contact_sand']->ct_subject.' ของ '.$data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname);
                $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            });


            // Mail::send('sendmail.mail', $data, function($message) use ($data) {
            //     $e_mail = trim($data['contact_sand']->ct_email);
            //     $message->to("bluesatan_dake@hotmail.com", $data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname)->subject($data['contact_sand']->ct_subject.' ของ '.$data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname);
            //     $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            // });

            Mail::send('sendmail.mail', $data, function($message) use ($data) {
                $e_mail = trim($data['contact_sand']->ct_email);
                $message->to("info@srisawadcapital.co.th", $data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname)->subject($data['contact_sand']->ct_subject.' ของ '.$data['contact_sand']->ct_name.' '.$data['contact_sand']->ct_lastname);
                $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            });
        }
        

        return redirect('contact-us')->with('success', 'ขอบคุณค่ะ บริษัทฯ ได้รับข้อมูลการติดต่อของท่านเรียบร้อยแล้ว');
    }

    public function credit_save(Request $request)
    {
        $logomember = Logomember::find(1);

        $creditcontact = new CreditContact();
        $creditcontact->cd_name             =       $request->firstname;
        $creditcontact->cd_lastname         =       $request->lasttname;
        $creditcontact->cd_card             =       $request->card_id;
        $creditcontact->cd_tel              =       $request->tel;
        $creditcontact->cd_email            =       $request->email;
        $creditcontact->cd_province         =       $request->province;
        $creditcontact->cd_jobs             =       $request->jobs;
        $creditcontact->cd_salary           =       $request->salary;
        $creditcontact->cd_year             =       $request->year;
        $creditcontact->cd_month            =       $request->month;
        $creditcontact->save();

      
        $credit_sand = CreditContact::find($creditcontact->cd_id);
        $data = array(
            'credit_sand' =>  $credit_sand
        );

        if($logomember->status == 1){
            Mail::send('sendmail.mail_credit', $data, function($message) use ($data) {
                $e_mail = trim($data['credit_sand']->cd_email);
                $message->to($e_mail, $data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname)->subject('ข้อมูลการสมัครสินเชื่อ ของ '.$data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname);
                $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            });
        }else{
            //  Mail::send('sendmail.mail_credit', $data, function($message) use ($data) {
            //     $e_mail = trim($data['credit_sand']->cd_email);
            //     $message->to("bluesatan_dake@hotmail.com", $data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname)->subject('ข้อมูลการสมัครสินเชื่อ ของ '.$data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname);
            //     $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            // });

            Mail::send('sendmail.mail_credit', $data, function($message) use ($data) {
                $e_mail = trim($data['credit_sand']->cd_email);
                $message->to("kasanee.b@srisawadcapital.co.th", $data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname)->subject('ข้อมูลการสมัครสินเชื่อ ของ '.$data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname);
                $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            });

            Mail::send('sendmail.mail_credit', $data, function($message) use ($data) {
                $e_mail = trim($data['credit_sand']->cd_email);
                $message->to("info@srisawadcapital.co.th", $data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname)->subject('ข้อมูลการสมัครสินเชื่อ ของ '.$data['credit_sand']->cd_name.' '.$data['credit_sand']->cd_lastname);
                $message->from('info@srisawadcapital.co.th','Srisawad Capital');
            });
           
            
        }
      
        return redirect('registered')->with('success', 'ขอบคุณค่ะ บริษัทฯ ได้รับข้อมูลการสมัครสินเชื่อของท่านเรียบร้อยแล้ว');
    }
    

    public function   policy(){
        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();


        $logosocial = Logosocial::all();

        $data = array(
            'contactorfooter' => $contactorfooter,
            'creditfooter' => $creditfooter,
            'logosocial' => $logosocial,
        );
        return view('policy',$data);
    }

    public function  termscondition(){
        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();


        $logosocial = Logosocial::all();

        $data = array(
            'contactorfooter' => $contactorfooter,
            'creditfooter' => $creditfooter,
            'logosocial' => $logosocial,
        );

        return view('termsconditions',$data);
    }
    public function  readnews($id){
        $news = News::find($id);
        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();


        $logosocial = Logosocial::all();

        $data = array(
            'contactorfooter' => $contactorfooter,
            'creditfooter' => $creditfooter,
            'logosocial' => $logosocial,
            'new' => $news,
        );

        return view('readmore',$data);
    }

    public function  readarticle($id){
        $news = Article::find($id);
        $contactorfooter = Contactorfooter::all();
        $creditfooter = Creditfooter::all();


        $logosocial = Logosocial::all();

        $data = array(
            'contactorfooter' => $contactorfooter,
            'creditfooter' => $creditfooter,
            'logosocial' => $logosocial,
            'new' => $news,
        );

        return view('readmore2',$data);
    }

    
}
