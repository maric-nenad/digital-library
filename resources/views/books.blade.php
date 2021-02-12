@extends('layout.master')

@section('content')
<h1>Explore digital library</h1>
<!--<ul>-->
<!--    @foreach($books as $book)-->
<!--    @foreach(json_decode($book->file) as $file)-->
<!--    <li>-->
<!--        <a-->
<!--            href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"-->
<!--            target="_blank"-->
<!--            download="{{ $file->original_name ?: '' }}">-->
<!--            <span>{{ $book->name ?: '' }}</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    @endforeach-->
<!--    @endforeach-->
<!--</ul>-->

<div class="books">
    @foreach($books as $result)
    <div class="books__cards">
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
