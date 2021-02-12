@extends('layout.master')

@section('content')
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
    <div class="result">
        @foreach($results as $result)
        <div class="result__cards">
            <div class="book-card">
                <img class="book-card__img" src="{{ Storage::disk(config('voyager.storage.disk'))->url($result->cover) ?: '' }}" alt="Cover">
                <p class="book-card__title">
                    <a
                        href="{{ route('reader', $result->id) }}">
                        <span>{{ $result->name ?: '' }}</span>
                    </a>
                </p>
                <p class="book-card__author">{{ $result->author }}</p>
                <p class="book-card__year">{{ $result->published_year}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
