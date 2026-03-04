@extends('layouts.master')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <h1 class="mb-3">Danh sách sản phẩm</h1>

    <table class="table table-bordered table-striped bg-white">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>
                        @if ($product['price'] > 10000000)
                            <span class="text-danger fw-bold">{{ number_format($product['price'], 0, ',', '.') }} đ (Vip)</span>
                        @else
                            <span>{{ number_format($product['price'], 0, ',', '.') }} đ</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
