@extends('layouts.master')


@section('main')
    <h1>All Ads</h1>
    <div class="row">
        <div class="col-3 bg-secondary">
            <ul class="list-group list-group-flush">

            @foreach ($all_categories as $cat)
                 <li class="list-group-item bg-secondary">
                    <a href="{{ route('welcome') }}?cat={{ $cat->name}}" class="text-light">{{ $cat->name }}</a>
                 </li>
             @endforeach
           </ul>
        </div>

        <div class="col-9">
           <ul class="list-group">
               @foreach ($all_ads as $ad)
                    <li class="list-group-item">
                        <a href="{{ route('singleAd', ['id'=>$ad->id]) }}">{{ $ad->title }}</a>
                        <span class="badge badge-warning float-right p-1">Pregleda {{ $ad->views }}</span>
                        <span class="badge badge-primary badge-fill p-1">{{ $ad->price }} rsd</span>
                    </li>
               @endforeach
           </ul>
        </div>
    </div>
@endsection