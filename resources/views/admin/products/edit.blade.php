@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="display: flex; justify-content: space-between; align-items: center;">Edit Produk
                        <a href="{{ url('admin/products') }}" class="btn text-white"
                            style="background-color: #00726c;">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">

                    @if (session('message'))
                        <h4>{{ session('message') }}</h4>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ url('admin/products/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                    data-bs-target="#details-tab-pane" type="button" role="tab"
                                    aria-controls="details-tab-pane" aria-selected="false">Detail Produk</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="image-tab" data-bs-toggle="tab"
                                    data-bs-target="#image-tab-pane" type="button" role="tab"
                                    aria-controls="image-tab-pane" aria-selected="false">Gambar Produk</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                <div class="mb-3 mt-3">
                                    <label for="">Kategori</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label>Nama Produk</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $product->name }}" />
                                </div>

                                <div class="mb-3">
                                    <label>slug</label>
                                    <input type="text" name="slug" class="form-control"
                                        value="{{ $product->slug }}" />
                                </div>

                                <div class="mb-3">
                                    <label for="">Pilih Brand</label>
                                    <select name="brand" class="form-control">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->name }}"
                                                {{ $brand->id == $product->brand ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label>Deskripsi Produk</label> <br>
                                    <textarea name="description" cols="150" rows="4">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3 mt-3">
                                            <label>Harga Asli</label>
                                            <input type="text" name="original_price" class="form-control"
                                                value="{{ $product->original_price }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 mt-3">
                                            <label>Harga Jual</label>
                                            <input type="text" name="selling_price" class="form-control"
                                                value="{{ $product->selling_price }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 mt-3">
                                            <label>Qty</label>
                                            <input type="number" name="quantity" class="form-control"
                                                value="{{ $product->quantity }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 mt-3">
                                            <input type="checkbox" name="trending"
                                                {{ $product->trending == '1' ? 'checked' : '' }} />
                                            <label>Trending</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 mt-3">
                                            <input type="checkbox" name="status"
                                                {{ $product->status == '1' ? 'checked' : '' }} />
                                            <label>Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab"
                                tabindex="0">
                                <div class="mb-3 mt-3">
                                    <label for="">Foto Produk</label>
                                    <input type="file" multiple class="form-control" name="image[]">
                                </div>
                                <div>
                                    @if ($product->productImages)
                                        <div class="row">
                                            @foreach ($product->productImages as $image)
                                                <div class="col-md-2">
                                                    <img src="{{ asset($image->image) }}"
                                                        style="width: 100px; height: 100px;"
                                                        alt="Gambar Produk">
                                                    <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}" class="d-block mb-4">Hapus</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <h5>Tidak Ada Foto Produk</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
