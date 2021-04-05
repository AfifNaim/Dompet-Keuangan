@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h2>Edit Income</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('income.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </section>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User</strong>
                {{ $income->user_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sub Categorie</strong>
                {{ $income->sub_categorie_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount</strong>
                {{ $income->amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note</strong>
                {{ $income->note }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created</strong>

            </div>
        </div>
    </div>
@endsection