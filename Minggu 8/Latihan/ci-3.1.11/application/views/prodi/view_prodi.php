<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Daftar Prodi Jurusan Teknologi Informasi</h1>
        <table class="table table-striped w-50">
            <thead>
                <tr>
                    <th scope="col" style="width: 70px;">No</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($prodi as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['prodi']; ?></td>
                        <td><?= $row['keterangan']; ?></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>