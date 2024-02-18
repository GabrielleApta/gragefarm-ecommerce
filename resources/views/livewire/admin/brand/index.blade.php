<div>

    @include('livewire.admin.brand.modal-form')

    <div class="row">
        <div class="col-md-12">
            {{-- @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif --}}
            <div class="card">
                <div class="card-header">
                    <h4 style="display: flex; justify-content: space-between; align-items: center;">Brand
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn text-white"
                            style="background-color: #00726c;">Tambah Brand</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->slug }}</td>
                                    <td>{{ $brand->status == '1' ? 'Tidak Aktif' : 'Aktif' }}</td>
                                    <td>
                                        <a href="#"  wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#updateBrandModal"  class="btn btn-warning">Edit</a>
                                        <a href="#" wire:click="deleteBrand({{ $brand->id }})"data-bs-toggle="modal" data-bs-target="#deleteBrandModal"  class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5">Tidak Ada Brand</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
            $('#deleteBrandModal').modal('hide');
        })
    </script>
@endpush
