@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recurent</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('recurent.create') }}" title="Create a Recurent"> <i class="fas fa-plus-circle"></i>
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
            <th>Kategori</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Start Date</th>
            <th>Reminder</th>
            <th>Repeat Every</th>
        </tr>
        @foreach ($recurent as $recurent)
            <tr>
                <td>1</td>
                <td>{{ $recurent->user_id }}</td>
                <td>{{ $recurent->sub_categorie_id }}</td>
                <td>{{ $recurent->name }}</td>
                <td>{{ $recurent->amount }}</td>
                <td>{{ $recurent->start_date }}</td>
                <td>{{ $recurent->reminder }}</td>
                <td>{{ $recurent->repeat_every }}</td>
                <td>
                    <form action="{{ route('recurent.destroy',$income->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('recurent.show',$income->id) }}">Show</a>

                         <a class="btn btn-primary btn-sm" href="{{ route('recurent.edit',$income->id) }}">Edit</a>

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