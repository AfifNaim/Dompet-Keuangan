@extends('Layouts.base')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h2>Edit Expense</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('expense.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </section>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User</strong>
                {{ $expense->user_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sub Categorie</strong>
                {{ $expense->sub_categorie_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount</strong>
                {{ $expense->amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note</strong>
                {{ $expense->note }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created</strong>

            </div>
        </div>
    </div>
@endsection