<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $income = Income::latest()->paginate(5);

        return view('income.index', compact('income')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('income.create');
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

        Income::create($request->all());

        return redirect()->route('income.index')
            ->with('success', 'Income created successfully.');
            
    }

    public function show(Income $income)
    {
        return view('income.show', compact('income'));
    }

    public function edit(Income $income)
    {
        return view('income.edit', compact('income'));
    }

    public function update(Request $request, Income $income)
    {

        $request->validate([
            'user_id' => 'required',
            'sub_categorie_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'note' => 'required',
        ]);
        $income->update($request->all());

        return redirect()->route('income.index')
            ->with('success', 'Income updated successfully');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('income.index')
                        ->with('sucess', 'Income Deleted Successfully');
    }
}
