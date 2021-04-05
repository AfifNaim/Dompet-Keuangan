@extends('Layout.base')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h2>Edit Ontime</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ontime.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </section>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User</strong>
                {{ $ontime->user_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sub Categorie</strong>
                {{ $ontime->sub_categorie_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount</strong>
                {{ $ontime->amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                {{ $ontime->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reminder</strong>
                {{ $ontime->reminder }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created</strong>

            </div>
        </div>
    </div>
@endsection