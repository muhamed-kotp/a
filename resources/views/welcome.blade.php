@extends('layout')

@section('title')
    Welcome To A STAR shop
@endsection


@section('content')
    <div style="margin-bottom: 250px;">
        <nav class="navbar navbar-danger" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                @foreach ($categories as $category)
                    <div class="dropdown me-3">
                        <a class=" nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $category->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($category->partitions as $partition)
                                <li><a class="dropdown-item"
                                        href="{{ route('partition.show', $partition->id) }}">{{ $partition->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </nav>
    </div>
@endsection
