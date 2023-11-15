<?php

namespace App\Http\Controllers;

use App\Models\assoc;
use App\Models\activite;
use App\Models\quartier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;

class AssocController extends Controller
{
    public function index(){
        $assoc = DB::table('assocs')
        ->join('quartiers', 'quartiers.idQuartier', '=', 'assocs.idQuartier')
        ->get();

$quartiers = DB::table('quartiers')
        ->get();
         return view('addsoc', ['assocs' => $assoc , 'quartiers' => $quartiers]);
    }
    public function save(Request $request){
        $assoc = new assoc;
        $assoc->NumeroNational = $request->input('NumeroNational');
        $assoc->Nom = $request->input('Nom');
        $assoc->DateCreation = $request->input('DateCreation');
        $assoc->TypeActivite = $request->input('TypeActivite');
        $assoc->NomPresident = $request->input('NomPresident');
        $assoc->NumTel = $request->input('NumTel');
        $assoc->Cin = $request->input('Cin');
        $assoc->DureeOffice = $request->input('DureeOffice');
        $assoc->idUser = 1;
        $assoc->document = $request->document;
        $assoc->documentRenouvelementOffice = $request->documentRenouvelementOffice;
        $assoc->idQuartier = $request->Quartier;
        $assoc->LieuAssoc = $request->input('LieuAssoc');
        if($request->hasFile('document')){
            $path = Storage::putFile('document', $request->file('document'));
            }
        if($request->hasFile('documentRenouvelementOffice')){
            $path = Storage::putFile('renouvelement office', $request->file('documentRenouvelementOffice'));
            }
        $assoc->save();
        return redirect()->back();
    }
    public function statistique(assoc $assoc){

                $activites = DB::table('assocs')->orderBy('created_at','desc')->get();
        return view('statistique', ['activites' => $activites]);
    }
    public function fiche(assoc $assoc){

        $assoc = DB::table('assocs')->orderBy('NumeroNational')->get();
return view('fiche', ['assoc' => $assoc])->with('assoc', $assoc);
}



public function wordExport($assoc)
    {


        $user = assoc::findOrFail($assoc);
        $b=$user->idQuartier;



        $qr = quartier::where('idQuartier', $b)->first();
        $qr1=$qr->NomQuartier;

        $templateProcessor = new TemplateProcessor('word-template/user.docx');
        $templateProcessor->setValue('Nom', $user->Nom);
        $templateProcessor->setValue('DateCreation', $user->DateCreation);
        $templateProcessor->setValue('NomPresident', $user->NomPresident);
        $templateProcessor->setValue('DureeOffice', $user->DureeOffice);
        $templateProcessor->setValue('Cin', $user->Cin);
        $templateProcessor->setValue('NomQuartier', $qr1);
        $templateProcessor->setValue('LieuAssoc', $user->LieuAssoc);
        $templateProcessor->setValue('NumTel', $user->NumTel);
        $templateProcessor->setValue('TypeActivite', $user->TypeActivite);
        $fileName = $user->Nom;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
