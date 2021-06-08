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
                        <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                            <th style="width: 110px;">Aksi</th>
                        <?php endif ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Grup</th>
                        <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                            <th>Aksi</th>
                        <?php endif ?>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($grup as $row) : ?>
                        <tr>
                            <td><?= $row->id_grup; ?></td>
                            <td><?= $row->grup; ?></td>
                            <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                                <td class="text-center align-middle">
                                    <div class="d-inline-flex">
                                        <div class="row">
                                            <div class="col-6">
                                                <button <?php if($row->id_grup == 1) echo 'disabled' ?> title="Edit Grup '<?= $row->grup; ?>'" onclick="location.href='<?= base_url('admin/tabel/grup/'); ?><?= $row->id_grup; ?>';" class='btn btn-outline-success shadow-sm btn-block btn-circle' type='submit' id='edit' name='edit'><i class='fas fa-edit'></i></button>
                                            </div>
                                            <div class="col-6">
                                                <form action="<?= base_url('admin/tabel/grup/hapus'); ?>" method="POST">
                                                    <input  <?php if($row->id_grup == 1) echo 'disabled' ?> type="hidden" value="<?= $row->id_grup; ?>" name="id_grup" id="id_grup">
                                                    <button  <?php if($row->id_grup == 1) echo 'disabled' ?> title="Hapus Grup '<?= $row->grup; ?>'" class='btn btn-outline-danger shadow-sm btn-block btn-circle' type='submit' id='hapus' name='hapus' onclick='javascript:confirmationDelete($(this));return false;'><i class='fas fa-trash'></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            <?php endif ?>
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


<?php if (!empty($edit)) : ?>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="<?= base_url('admin/tabel/grup/ubah'); ?>" enctype='multipart/form-data' method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="exampleModalLongTitle">Edit Data Produk</h5>
                        <a href="<?= base_url('admin/tabel/grup'); ?>" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <input type="hidden" value="<?= $edit[0]->id_grup; ?>" name="id" id="id">
                            <div class="col-4 mb-3">
                                <label for="grup" class="text-dark">ID Grup</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required maxlength="11" min="2" type="number" value="<?= $edit[0]->id_grup; ?>" class="form-control text-dark" id="id_grup" name="id_grup">
                            </div>
                            <div class="col-4 mb-3">
                                <label for="grup" class="text-dark">Nama Grup</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required maxlength="20" type="text" value="<?= $edit[0]->grup; ?>" class="form-control text-dark" id="grup" name="grup">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/tabel/grup'); ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary" id='tambah' name='tambah'>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif ?>