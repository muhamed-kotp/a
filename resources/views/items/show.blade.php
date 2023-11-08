@extends('layout')

{{-- @section('style')
    <link rel="stylesheet" href="{{ asset('css/booksIndex.css') }}">
@endsection --}}

@section('content')
    <div class="container " style="margin-bottom :250px; margin-top: 50px ">
        <div class=" row ">
            @if ($item !== null)
                <div class="col-lg-6 mt-5">
                    <img src="{{ asset('uploads/items/') }}/{{ $item->img }}" class="img-fluid ">
                </div>
                <div class="mt-5 col-lg-6">
                    <div class="ms-5">
                        <h4 class="fw-normal">{{ $item->title }}</h4>

                        <p>{{ $item->description }}</p>

                        @auth
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('items.delete', $item->id) }}" class="btn btn-danger">delete</a>
                        @endauth

                        <div>
                            <a href="{{ route('welcome') }}" class="btn default-btn">Back</a>
                        </div>

                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
