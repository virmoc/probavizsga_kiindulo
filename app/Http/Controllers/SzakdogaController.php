<?php

namespace App\Http\Controllers;
use App\Models\Szakdoga;

use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index(Request $request)

    {
        
        return Szakdoga::all();
    }


    public function store(Request $request)

    {


        $request->validate([]);

        return Szakdoga::create($request->all());
    }



    public function update(Request $request, string $id)

    {

        $request->validate([
            'szakdoga_nev' => 'required',
            'githublink' => 'required',
            'oldallink' => 'required',
            'tagokneve' => 'required'
        ]);
        $szakdoga = Szakdoga::find($id);
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();



        return ['message' => 'Módosítva'];
    }



    public function delete(Request $request, $id)

    {

        $article = Szakdoga::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
