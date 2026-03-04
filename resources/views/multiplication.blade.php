@extends('layouts.master')

@section('title', 'Bảng cửu chương')

@section('content')
    <h1 class="mb-3">Bảng cửu chương</h1>

    @if ($error)
        <div class="alert alert-danger">{{ $error }}</div>
    @else
        <h2 class="h5">Bảng cửu chương {{ $n }}</h2>
        <ul class="list-group">
            @for ($i = 1; $i <= 10; $i++)
                <li class="list-group-item">{{ $n }} x {{ $i }} = {{ $n * $i }}</li>
            @endfor
        </ul>
    @endif
@endsection
