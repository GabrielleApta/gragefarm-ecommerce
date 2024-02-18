<div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit.prevent="destroyCategory">

                    <div class="modal-body">
                        <h6>Yakin ingin menghapus?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 style="display: flex; justify-content: space-between; align-items: center;">Kategori
                        <a href="{{ url('admin/category/create') }}" class="btn text-white"
                            style="background-color: #00726c;">Tambah Kategori</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->status == '1' ? 'Tidak Aktif' : 'Aktif' }}</td>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="#" wire:click="deleteCategory({{ $category->id }})" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    })
</script>

@endpush
