<?php

namespace App\Http\Controllers;

use URL;
use App\assoc;
use App\activite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ActiviteController extends Controller
{
    public function ajouter(Request $request){
        $activite = new activite;
        $activite->NomActivite = $request->input('NomActivite');
        $activite->TypeActivite = $request->input('TypeActivite');
        $activite->LieuActivite = $request->input('LieuActivite');
        $activite->DateActivite = $request->input('DateActivite');
        $activite->photo = $request->photo;
        

    if($request->hasFile('photo')){
    $path = Storage::putFile('images', $request->file('photo'));
    }

        $activite->save();
        
        return back()->with('success', 'تمت اضافة النشاط بنجاح');
    }
    public function updateColumn(Request $request)
{
    $request->input('NumeroNational');
    $request->input('NomPresident');
    $request->input('DureeOffice');
    $user = assoc::find($request->input('NumeroNational'));


    $user->Nom = $validatedData['status'];
        $user->updated_at = Carbon::now()->addYear(); // Assuming you have a 'status_updated_at' column in your table
        $user->save();
    return redirect()->back()->with('success', 'Column updated successfully.');
}

}