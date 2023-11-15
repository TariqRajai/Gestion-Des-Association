<?php

namespace App\Http\Controllers;

use App\Models\assoc;
use App\Models\utilisateur;
use App\Mail\sendMail;
use App\Mail\profileMail;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Notifications\userNortification;
use Illuminate\Support\Facades\Notification;


class UtilisateurController extends Controller
{
    public function index2(){

        return view('home');
    }

    public function index(Request $request){

        return view('dashboard');
    }
    public function add(Request $request)
    {
        $utilisateur= new utilisateur();
        $utilisateur->NomUser = $request->NomUser;
        $utilisateur->PrenomUser = $request->PrenomUser;
        $utilisateur->NumTelUser = $request->NumTelUser;
        $utilisateur->email = $request->email;
        $utilisateur->Password = Hash::make($request->Password);
        $utilisateur->save();
        return redirect()->back()->with('success', 'تمت الاضافة بنجاح');


    }


    public function store(Request $request)
    {


        $user = utilisateur::where('email', $request->email)->first();
    if (! $user || ! Hash::check($request->Password, $user->Password)) {

return redirect()->back()->with('error', 'الايميل او كلمة السر خاطئان المرجو اعادة المحاولة');
    }
    else{

      $result=DB::select('SELECT COUNT(month(DateActivite)) as nbr,MONTH(DateActivite) as mnt FROM activites GROUP by MONTH(DateActivite);');
        $activites = DB::table('activites')->orderBy('DateActivite','desc')->take(15)->get();
        $assocs=DB::select('SELECT assocs.Nom as NomAssoc,COUNT(activites.TypeActivite) as Nombre FROM assocs INNER JOIN activites on assocs.TypeActivite=activites.TypeActivite group by assocs.nom;');

        $utilisateurs = utilisateur::where('email',$request->email )->select('NomUser')->get();
        $norti=DB::table('assocs')->orderBy('created_at','desc')->take(1)->get();

        return view('dashboard',['result' => $result], ['activites' => $activites,'assocs' => $assocs,'utilisateurs' => $utilisateurs,'norti'=>$norti]);
    }

    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('accueil');
}


public function index4()
    {
        $mailData = [
            'title' => 'Mail from Webappfix',
            'body' => 'This is for testing email usign smtp',
        ];

        Mail::to('rajaitariq63@gmail.com')->send(new sendMail($mailData));



        dd('Email send successfully.');
    }


    public function home(Request $request){
        $result=DB::select('SELECT COUNT(month(DateActivite)) as nbr,MONTH(DateActivite) as mnt FROM activites GROUP by MONTH(DateActivite);');
        $activites = DB::table('activites')->orderBy('DateActivite','desc')->take(15)->get();
        $assocs=DB::select('SELECT assocs.Nom as NomAssoc,COUNT(activites.TypeActivite) as Nombre FROM assocs INNER JOIN activites on assocs.TypeActivite=activites.TypeActivite group by assocs.nom;');


        $utilisateurs = utilisateur::where('email',$request->email )->select('NomUser')->get();
        $norti=DB::table('assocs')->orderBy('created_at','desc')->take(1)->get();

        return view('dashboard',['result' => $result], ['activites' => $activites,'assocs' => $assocs,'utilisateurs' => $utilisateurs,'norti'=>$norti])->with('success', 'Congratulations, your account can be used! After exiting, Login using User ID and Password');
    }
    public function notify(Request $request){
        $notificationData = [
            'message' => 'This is a custom notification message.',
            // Add any additional data you want to pass to the view
        ];

        $utilisateurs = utilisateur::where('email',$request->email )->select('NomUser')->get();
       $nortification =Notification::send($utilisateurs, new userNortification($notificationData));
       $user = auth()->user();
        dd($user);
    }

}

