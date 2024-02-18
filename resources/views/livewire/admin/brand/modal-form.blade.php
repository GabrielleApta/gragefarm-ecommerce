<!-- Modal -->
<div wire:.ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Brand</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="storeBrand()">

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Nama Brand</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label><br>
                        <input type="checkbox" wire:model.defer="status"> Checked=Tidak Aktif, Un-Checked=Aktif
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                        data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn text-white" style="background-color: #00726c">Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>



<!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Brand</h1>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div wire:loading>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="updateBrand()">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Nama Brand</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label><br>
                            <input type="checkbox" wire:model.defer="status"> Checked=Tidak Aktif, Un-Checked=Aktif
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #00726c">Simpan</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>



<!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Brand</h1>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div wire:loading>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="destroyBrand">

                    <div class="modal-body">
                        <h4>Apakah anda yakin ingin menghapus?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #00726c">Hapus</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
