<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-inline-flex w-100">
            <h5 class="m-0 font-weight-bold text-primary my-auto">Tabel Grup</h5>
            <!-- <button type="button" class="btn btn-primary shadow ml-auto" data-toggle="modal" data-target="#tambah">
                Tambah Grup
            </button>  -->
            
            <button class="btn btn-primary btn-sm btn-icon-split shadow ml-auto" data-toggle="modal" data-target="#tambah">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Grup</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Grup</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($grup as $row) : ?>
                        <tr>
                            <td><?= $row->id_grup; ?></td>
                            <td><?= $row->grup; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form autocomplete="off" action="<?= base_url('admin/tabel/grup/tambah'); ?>" method="POST" id="formtambah" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLongTitle">Tambah Data Grup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-4 mb-3">
                            <label for="grup" class="text-dark">Nama Grup</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="20" type="text" class="form-control text-dark" id="grup" name="grup">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Batal</button>
                    <button type="submit" class="btn btn-primary" id='Tambah' name='Tambah'>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>