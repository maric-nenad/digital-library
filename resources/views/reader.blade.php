@extends('layout.master')

@section('content')
    @foreach(json_decode($book->first()->file) as $file)
        <div class="book">
            <object
                class="viewer"
                data="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}#page=1"
                type="application/pdf"
                width="100%"
                height="100%"
                style="position: absolute">

                <iframe
                    src="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}#page=1"
                    width="100%"
                    height="100%"
                    style="border: none;">
                    <p>Your browser does not support PDFs.
                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}">Download the PDF</a>.</p>
                </iframe>
            </object>
        </div>
    @endforeach
@endsection
