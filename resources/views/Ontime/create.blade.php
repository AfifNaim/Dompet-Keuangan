@extends('Layout.base')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h2>Add New Ontime</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ontime.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </section>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ontime.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User</strong>
                    <input type="text" name="user_id" class="form-control" placeholder="User">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sub Categorie</strong>
                    <input type="text" name="sub_categorie_id" class="form-control" placeholder="Categorie">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount</strong>
                    <input type="number" name="amount" class="form-control" placeholder="Amount">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date</strong>
                    <input type="date" name="date" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reminder</strong>
                    <input type="text" name="reminder" class="form-control" placeholder="Reminder">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection