<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categorie = Categorie::latest()->paginate(5);

        return view('categorie.index', compact('categorie')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('categorie.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Categorie::create($request->all());

        return redirect()->route('categorie.index')
            ->with('success', 'Product created successfully.');
            
    }

    public function show(Categorie $categorie)
    {
        return view('categorie.show', compact('categorie'));
    }

    public function edit(Categorie $categorie)
    {
        return view('categorie.edit', compact('categorie'));
    }

    public function update(Request $request, Categorie $categorie)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $categorie->update($request->all());

        return redirect()->route('categorie.index')
            ->with('success', 'Categorie updated successfully');
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index')
                        ->with('sucess', 'Post Deleted Successfully');
    }
}
