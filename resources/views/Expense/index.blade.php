@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Expense</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('expense.create') }}" title="Create a categorie"> <i class="fas fa-plus-circle"></i>
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
            <th>Amount</th>
            <th>Tanggal</th>
            <th>Note</th>
        </tr>
        @foreach ($expense as $expense)
            <tr>
                <td>1</td>
                <td>{{ $expense->user_id }}</td>
                <td>{{ $expense->sub_categorie_id }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->date }}</td>
                <td>{{ $expense->note }}</td>
                <td>
                    <form action="{{ route('expense.destroy',$expense->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('expense.show',$expense->id) }}">Show</a>

                         <a class="btn btn-primary btn-sm" href="{{ route('expense.edit',$expense->id) }}">Edit</a>

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