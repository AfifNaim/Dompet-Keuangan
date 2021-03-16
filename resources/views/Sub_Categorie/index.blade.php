@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categorie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sub_categorie.create') }}" title="Create a categorie"> <i class="fas fa-plus-circle"></i>
                    </a>
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
            <th>User</th>
            <th>Categorie</th>
            <th>Name</th>
        </tr>
        @foreach ($sub_categorie as $sub_categorie)
            <tr>
                <td>1</td>
                <td>{{ $sub_categorie->user_id }}</td>
                <td>{{ $sub_categorie->categorie_id }}</td>
                <td>{{ $sub_categorie->name }}</td>
                <td>
                    <form action="{{ route('sub_categorie.destroy',$sub_categorie->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('sub_categorie.show',$sub_categorie->id) }}">Show</a>

                         <a class="btn btn-primary btn-sm" href="{{ route('sub_categorie.edit',$sub_categorie->id) }}">Edit</a>

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