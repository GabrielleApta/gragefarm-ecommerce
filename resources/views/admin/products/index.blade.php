@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 style="display: flex; justify-content: space-between; align-items: center;">Produk
                        <a href="{{ url('admin/products/create') }}" class="btn text-white"
                            style="background-color: #00726c;">Tambah Produk
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" style="text-align: center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        @if ($product->category)
                                            {{ $product->category->name }}
                                        @else
                                            Kategori Tidak Ada
                                        @endif
                                    </td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status == '1' ? 'Tidak Aktif' : 'Aktif' }}</td>
                                    <td>
                                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Apakah Kamu Ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">Tidak Ada Data Produk</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
