<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Data Mahasiswa</h1>
        <table class="table table-striped w-50">
            <thead>
                <tr>
                    <th scope="col" style="width: 70px;">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['prodi']; ?></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>