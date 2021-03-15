<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense = Expense::latest()->paginate(5);

        return view('expense.index', compact('expense')) 
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('expense.create');
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

        Expense::create($request->all());

        return redirect()->route('expense.index')
            ->with('success', 'Expense created successfully.');
            
    }

    public function show(Expense $expense)
    {
        return view('expense.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        return view('expense.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {

        $request->validate([
            'user_id' => 'required',
            'sub_categorie_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'note' => 'required',
        ]);
        $expense->update($request->all());

        return redirect()->route('expense.index')
            ->with('success', 'Expense updated successfully');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expense.index')
                        ->with('sucess', 'Expense Deleted Successfully');
    }
}
