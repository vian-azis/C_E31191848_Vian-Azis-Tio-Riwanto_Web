<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Daftar Angkatan</h1>
        <table class="table table-striped" style="width: 200px;">
            <thead>
                <tr>
                    <th scope="col" style="width: 70px;">No</th>
                    <th scope="col">Tahun</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($angkatan as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['tahun']; ?></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>