<?php

namespace App\Http\Controllers;

use App\Models\Sub_Categorie;
use Illuminate\Http\Request;

class Sub_CategorieController extends Controller
{
    public function index()
    {
        $sub_categorie = Sub_Categorie::latest()->paginate(5);

        return view('sub_categorie.index', compact('sub_categorie')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('sub_categorie.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'categorie_id' => 'required',
            'name' => 'required',
            ]);

        Sub_Categorie::create($request->all());

        return redirect()->route('sub_categorie.index')
            ->with('success', 'Sub Categorie created successfully.');
            
    }

    public function show(Sub_Categorie $sub_categorie)
    {
        return view('sub_categorie.show', compact('sub_categorie'));
    }

    public function edit(Sub_Categorie $sub_categorie)
    {
        return view('sub_categorie.edit', compact('sub_categorie'));
    }

    public function update(Request $request, Sub_Categorie $sub_categorie)
    {

        $request->validate([
            'user_id' => 'required',
            'categorie_id' => 'required',
            'name' => 'required',
        ]);
        $sub_categorie->update($request->all());

        return redirect()->route('sub_categorie.index')
            ->with('success', 'Sub Categorie updated successfully');
    }

    public function destroy(Sub_Categorie $sub_categorie)
    {
        $sub_categorie->delete();
        return redirect()->route('sub_categorie.index')
                        ->with('sucess', 'Sub Categorie Deleted Successfully');
    }
}
