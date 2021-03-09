<?php

namespace App\Http\Controllers;

use App\Models\Ontime;
use Illuminate\Http\Request;

class OntimeController extends Controller
{
    public function index()
    {
        $ontime = Ontime::latest()->paginate(5);

        return view('ontime.index', compact('ontime')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('ontime.create');
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

        Ontime::create($request->all());

        return redirect()->route('ontime.index')
            ->with('success', 'Ontime created successfully.');
            
    }

    public function show(Ontime $ontime)
    {
        return view('ontime.show', compact('ontime'));
    }

    public function edit(Ontime $ontime)
    {
        return view('ontime.edit', compact('ontime'));
    }

    public function update(Request $request, Ontime $ontime)
    {

        $request->validate([
            'user_id' => 'required',
            'sub_categorie_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'note' => 'required',
        ]);
        $ontime->update($request->all());

        return redirect()->route('ontime.index')
            ->with('success', 'Ontime updated successfully');
    }

    public function destroy(Ontime $ontime)
    {
        $ontime->delete();
        return redirect()->route('ontime.index')
                        ->with('sucess', 'Ontime Deleted Successfully');
    }
}