@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
           @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h2>All Ads</h2>
        </div>
    </div>
</div>
@endsection
