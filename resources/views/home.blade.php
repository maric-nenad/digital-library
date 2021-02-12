@extends('layout.master')

@section('content')
    <div class="search-default">
        <h1>Digital library</h1>
        <div class="search-bar">
            <form class="search-bar__form" action="{{ route('search') }}" method="GET">
                <input class="search-bar__form--input"   type="text" placeholder="Search.." name="search">
                <button class="search-bar__form--button" type="submit">
                <span class="material-icons">
                search
                </span>
                </button>
            </form>
        </div>
    </div>
@endsection
