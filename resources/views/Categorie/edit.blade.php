@extends('Layout.base')

@section('content')
    <div class="main-content">
        <div class="section">
            <div section="section-header">
                <h2>Edit Categorie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categorie.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('categorie.update',$categorie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="content">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $categorie->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    </div>
@endsection