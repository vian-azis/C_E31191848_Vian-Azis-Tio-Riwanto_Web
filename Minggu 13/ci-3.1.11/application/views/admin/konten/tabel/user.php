<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-inline-flex w-100">
            <h5 class="m-0 font-weight-bold text-primary my-auto">Tabel User</h5>

            <!-- <button type="button" class="btn btn-primary shadow ml-auto" data-toggle="modal" data-target="#tambah">
                Tambah User
            </button> -->

            <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                <button class="btn btn-primary btn-sm btn-icon-split shadow ml-auto" data-toggle="modal" data-target="#tambah">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </button>
            <?php endif ?>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Grup</th>
                        <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                            <th style="width: 110px;">Aksi</th>
                        <?php endif ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Grup</th>
                        <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                            <th>Aksi</th>
                        <?php endif ?>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($user as $row) : ?>
                        <tr>
                            <td><?= $row->id; ?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->grup; ?></td>
                            <?php if (!empty($this->session->userdata('USER_TYPE')) && $this->session->userdata('USER_TYPE') == 1) : ?>
                                <td class="text-center align-middle">
                                    <div class="d-inline-flex">
                                        <div class="row">
                                            <div class="col-6">
                                                <button title="Edit User '<?= $row->username; ?>'" onclick="location.href='<?= base_url('admin/tabel/user/'); ?><?= $row->id; ?>';" class='btn btn-outline-success shadow-sm btn-block btn-circle' type='submit' id='edit' name='edit'><i class='fas fa-edit'></i></button>
                                            </div>
                                            <div class="col-6">
                                                <form action="<?= base_url('admin/tabel/user/hapus'); ?>" method="POST">
                                                    <input type="hidden" value="<?= $row->id; ?>" name="id" id="id">
                                                    <button title="Hapus User '<?= $row->username; ?>'" class='btn btn-outline-danger shadow-sm btn-block btn-circle' type='submit' id='hapus' name='hapus' onclick='javascript:confirmationDelete($(this));return false;'><i class='fas fa-trash'></i></button>
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
            <form autocomplete="off" action="<?= base_url('admin/tabel/user/tambah'); ?>" method="POST" id="formtambah" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLongTitle">Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-4 mb-3">
                            <label for="username" class="text-dark">Username</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="10" type="text" class="form-control text-dark" id="username" name="username">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="password" class="text-dark">Password</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="6" type="password" class="form-control text-dark" id="password" name="password">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="nama" class="text-dark">Nama</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="50" type="text" class="form-control text-dark" id="nama" name="nama">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="id_grup" class="text-dark">Grup</label>
                        </div>
                        <div class="col-8 mb-3">
                            <select required class="form-control rounded" name="id_grup" id="id_grup">
                                <option value="" selected disabled hidden>Pilih Grup User</option>
                                <?php
                                // Membuat option select otomatis
                                foreach ($grup as $row) {
                                    echo "<option value='" . $row->id_grup . "'>" . $row->grup . "</option>";
                                }
                                ?>
                            </select>
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
                <form action="<?= base_url('admin/tabel/user/ubah'); ?>" enctype='multipart/form-data' method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="exampleModalLongTitle">Edit Data Produk</h5>
                        <a href="<?= base_url('admin/tabel/user'); ?>" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <input type="hidden" value="<?= $edit[0]->id; ?>" name="id" id="id">
                            <div class="col-4 mb-3">
                                <label for="username" class="text-dark">Username</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required maxlength="10" value="<?= $edit[0]->username; ?>" type="text" class="form-control text-dark" id="username" name="username">
                            </div>

                            <div class="col-4 mb-3">
                                <label for="password" class="text-dark">Password Baru</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required value="" autocomplete="off" type="password" class="form-control text-dark" id="password" name="password">
                            </div>

                            <div class="col-4 mb-3">
                                <label for="nama" class="text-dark">Nama</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required maxlength="50" value="<?= $edit[0]->nama; ?>" type="text" class="form-control text-dark" id="nama" name="nama">
                            </div>

                            <div class="col-4 mb-3">
                                <label for="id_grup" class="text-dark">Grup</label>
                            </div>
                            <div class="col-8 mb-3">
                                <select required class="form-control rounded" name="id_grup" id="id_grup">
                                    <option value="" selected disabled hidden>Pilih Grup User</option>
                                    <?php
                                    // Membuat option select otomatis
                                    foreach ($grup as $row) :
                                    ?>
                                        <option value="<?= $row->id_grup ?>" <?php echo ($edit[0]->id_grup == $row->id_grup) ? 'selected="selected"' : ''; ?>><?= $row->grup ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/tabel/user'); ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary" id='tambah' name='tambah'>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif ?>