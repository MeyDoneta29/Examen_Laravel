<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesseurController extends Controller
{
    public function index(){

        $etudiants = Etudiant::orderBy('nom','asc')->paginate(5);
        return view('etudiant.index',[
            'etudiants' => $etudiants, 
        ]);
    }
     // Affiche le formulaire de creation
    public function create(){
        return view('etudiant.create');
    }
      // Enregistrer un etudiant
    public function store(Request $request){
        $request->validate([
            'prenom'=>'required|min:5|max:255',
            'nom'=>'required|min:5|max:255',
            'date_naissance'=>'required',

        ]);

       try {
        Etudiant::create([
            'prenom'=>$request->input('prenom'),
            'nom'=>$request->input('nom'),
            'date_naissance'=>$request->input('date_naissance')
           ]);
           return redirect()->route('Etudiant.index')
                    ->with('success','Etudiant ajouter avec succes');
       } catch (\Throwable $th) {
            dd($th);
       }
    }

    //Supprimer un etudiant
    public function delete(Etudiant $etudiant){
        $etudiant->delete();
        return redirect()->route('Etudiant.index')->with('delete','Etudiant supprime avec succes');
    }
    //Modifier un etudiant
    public function edit(Etudiant $etudiant){
        return view('etudiant.edit',compact('etudiant'));
    }
    //Mettre a jour un etudiant
    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
        'prenom'=>'required|min:5|max:255',
        'nom'=>'required|min:5|max:255',
        'date_naissance'=>'required',
        ]);
        $etudiant->update([
        'prenom'=>$request->input('prenom'),
        'nom'=>$request->input('nom'),
        'date_naissance'=>$request->input('date_naissance')
        ]);
        return redirect()->route('Etudiant.index')->with('delete','Etudiant supprime avec succes');
    }
}
