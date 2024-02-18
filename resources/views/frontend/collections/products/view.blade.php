@extends('layouts.app')
@section('title', 'GrageFarm - Belanja Sayur dan Bahan Lainnya Lebih Mudah | Detail Produk')
@section('content')

<div class="container">
    <livewire:frontend.product.view :category="$category" :product="$product" />
</div>

@endsection
