@extends('Layout.base')

@section('content')
    <div class="main-content">
        <div class="section">
            <div section="section-header">
                <h2>Edit Categorie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sub_categorie.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </section>
    </div>
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

    <form action="{{ route('sub_categorie.update',$sub_categorie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User</strong>
                    <input type="text" name="user_id" value="{{ $sub_categorie->user_id }}" class="form-control" placeholder="User">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categorie</strong>
                    <input type="text" name="categorie_id" value="{{ $sub_categorie->user_id }}" class="form-control" placeholder="categorie_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $sub_categorie->name }}" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection