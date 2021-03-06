@extends('layouts.app')

@section('content')
     <div class="main-content">
        <div class="section">
            <div section="section-header">
                <h2>Edit Income</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('income.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('income.update',$income->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User</strong>
                    <input type="text" name="user_id" value="{{ $income->user_id }}" class="form-control" placeholder="User">
                </div>
                <div class="form-group">
                    <strong>Jenis</strong>
                    <input type="text" name="sub_categorie_id" value="{{ $income->sub_categorie_id }}" class="form-control" placeholder="Jenis">
                </div>
                <div class="form-group">
                    <strong>Jumlah</strong>
                    <input type="number" name="amount" value="{{ $income->amount }}" class="form-control" placeholder="Jumlah">
                </div>
                    <div class="form-group">
                    <strong>Tanggal</strong>
                    <input type="date" name="date" value="{{ $income->date}}" class="form-control" placeholder="Tanggal">
                </div>
                    <div class="form-group">
                    <strong>Note</strong>
                    <input type="text" name="note" value="{{ $income->note }}" class="form-control" placeholder="Note">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
@endsection