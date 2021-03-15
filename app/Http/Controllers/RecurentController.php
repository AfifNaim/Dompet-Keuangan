<?php

namespace App\Http\Controllers;

use App\Models\Recurent;
use Illuminate\Http\Request;

class RecurentController extends Controller
{
    public function index()
    {
        $recurent = Recurent::latest()->paginate(5);

        return view('recurent.index', compact('recurent')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('recurent.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'sub_categorie_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'note' => 'required',
        ]);

        Recurent::create($request->all());

        return redirect()->route('recurent.index')
            ->with('success', 'Recurent created successfully.');
            
    }

    public function show(Recurent $recurent)
    {
        return view('recurent.show', compact('recurent'));
    }

    public function edit(Recurent $recurent)
    {
        return view('recurent.edit', compact('recurent'));
    }

    public function update(Request $request, Recurent $recurent)
    {

        $request->validate([
            'user_id' => 'required',
            'sub_categorie_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'note' => 'required',
        ]);
        $recurent->update($request->all());

        return redirect()->route('recurent.index')
            ->with('success', 'Recurent updated successfully');
    }

    public function destroy(Recurent $recurent)
    {
        $recurent->delete();
        return redirect()->route('recurent.index')
                        ->with('sucess', 'Recurent Deleted Successfully');
    }
}
