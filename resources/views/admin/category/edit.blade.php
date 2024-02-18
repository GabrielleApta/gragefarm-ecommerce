@extends('layouts.admin')
@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 style="display: flex; justify-content: space-between; align-items: center;">Edit Data Kategori
          <a href="{{ url('admin/category') }}" class="btn text-white" style="background-color: #00726c;">Kembali</a>
        </h4>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/category/'.$category->id) }}" method="POST"class="mt-4" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-lg-4 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-black" align="center">FOTO KATEGORI</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('/uploads/category/'.$category->image) }}"  alt="Edit Foto">
                  </div>

                  <div class="form-group">
                    <Label>Foto Kategori</Label>
                    <input type="file" class="form-control" name="image">
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-8 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-black" align="center">DATA KATEGORI</h6>
                </div>
                <div class="card-body">

                  <div class="form-group">
                    <Label>Nama Kategori</Label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    @error('name') <small class="text-danger">{{$message}}</small>  @enderror
                  </div>


                  <div class="form-group">
                    <Label>Slug</Label>
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                    @error('name') <small class="text-danger">{{$message}}</small>  @enderror
                  </div>

                  <div class="form-group">
                    <Label>Deskripsi</Label>
                    <textarea class="form-control" name="description" rows="3"> {{ $category->description }}</textarea>
                    @error('name') <small class="text-danger">{{$message}}</small>  @enderror
                  </div>

                  <div class="form-group">
                    <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : 'not' }}>
                    <Label>Status</Label>
                  </div>

                  <div class="col-md-12 mb-3" style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn btn-primary" style="background-color: #00726c;">Simpan Data</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
