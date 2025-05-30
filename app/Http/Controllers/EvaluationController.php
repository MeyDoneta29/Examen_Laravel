<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    public function index(){

        $etudiants = Etudiant::orderBy('nom','asc')->paginate(5);
        return view('evaluation.listEtudiants',[
            'etudiants' => $etudiants, 
        ]);
    }
    public function noter($id)
{
    $evaluation = Evaluation::findOrFail($id);
    $etudiants = Etudiant::all(); // Récupère tous les étudiants

return view('evaluation.noter', compact('evaluation', 'etudiants'));

}

public function storeNotes(Request $request, $id)
{
    $evaluation = Evaluation::findOrFail($id);

    foreach ($request->notes as $etudiant_id => $note) {
        $evaluation->etudiants()->updateOrInsert(
            ['etudiant_id' => $etudiant_id],
            ['note' => $note]
        );
    }

    return redirect()->route('evaluation.note', $evaluation->id)->with('success', 'Notes enregistrées avec succès.');
}

}
