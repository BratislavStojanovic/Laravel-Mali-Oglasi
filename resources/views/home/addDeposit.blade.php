@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
           @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <form action="{{ route('home.addDeposit') }}" method="post">
                @csrf
                <label for="deposit">Add deposit</label>
                <input type="text" name="deposit" placeholder="deposit" class="form-control"><br>
                @if ('deposit')
                    <p class="bg-warning">{{ $errors->first('deposit') }}</p>
                @endif
                <button type="submit" class="btn btn-info">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
