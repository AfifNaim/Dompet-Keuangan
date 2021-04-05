@extends('Layout.base')

@section('content')
    <div class="main-content">
        <div class="section">
            <div section="section-header">
                <h2>Edit Recurent</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recurent.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="{{ route('recurent.update',$recurent->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User</strong>
                    <input type="text" name="user_id" value="{{ $recurent->user_id }}" class="form-control" placeholder="User">
                </div>
                  <div class="form-group">
                    <strong>Categorie</strong>
                    <input type="text" name="sub_categorie_id" value="{{ $recurent->Sub_Categorie_id }}" class="form-control" placeholder="Categorie">
                </div>
                  <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $recurent->name }}" class="form-control" placeholder="Name">
                </div>
                  <div class="form-group">
                    <strong>Amount</strong>
                    <input type="number" name="amount" value="{{ $recurent->amount }}" class="form-control" placeholder="Amount">
                </div>
                  <div class="form-group">
                    <strong>Start Date</strong>
                    <input type="text" name="start_date" value="{{ $recurent->start_date }}" class="form-control" placeholder="Start Date">
                </div>
                  <div class="form-group">
                    <strong>Reminder</strong>
                    <input type="text" name="reminder" value="{{ $recurent->reminder }}" class="form-control" placeholder="Reminder">
                </div>
                  <div class="form-group">
                    <strong>Reapet Every</strong>
                    <input type="date" name="repeat_every" value="{{ $recurent->repeat_every }}" class="form-control" placeholder="Repeat Every">
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection