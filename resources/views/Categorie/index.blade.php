@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categorie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorie.create') }}" title="Create a categorie"> <i class="fas fa-plus-circle"></i>
                    Tambal</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($categorie as $categorie)
            <tr>
                <td>1</td>
                <td>{{ $categorie->name }}</td>
                <td>
                    <form action="{{ route('categorie.destroy',$categorie->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('categorie.show',$categorie->id) }}">Show</a>

                         <a class="btn btn-primary btn-sm" href="{{ route('categorie.edit',$categorie->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection