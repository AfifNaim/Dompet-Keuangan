@extends('Layout.base')


@section('content')
     <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h2>Edit Sub Categorie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sub_categorie.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </section>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User</strong>
                {{ $sub_categorie->user_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie</strong>
                {{ $sub_categorie->categorie_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                {{ $sub_categorie->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created</strong>

            </div>
        </div>
    </div>
@endsection