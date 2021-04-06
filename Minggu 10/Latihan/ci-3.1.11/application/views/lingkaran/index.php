<!-- Begin page content -->

<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5 mb-5 text-center">Hitung Luas Lingkaran</h1>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="<?= base_url(); ?>Hitunglingkaran2">
                    <div class="form-group mb-3">
                        <label for="luas">
                            <h4>Hitung Luas</h4>
                        </label>
                        <input type="number" class="form-control w-50" id="luas" name="luas" aria-describedby="luasHelp" value="<?php if (isset($jari1)) echo $jari1;
                                                                                                                                else echo 0 ?>" min="0">
                        <small id="luasHelp" class="form-text text-muted">Masukkan jari-jari yang akan dihitung luasnya.</small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="keliling">
                            <h4>Hitung Keliling</h4>
                        </label>
                        <input type="number" class="form-control w-50" id="keliling" name="keliling" aria-describedby="kelilingHelp" value="<?php if (isset($jari2)) echo $jari2;
                                                                                                                                            else echo 0 ?>" min="0">
                        <small id="kelilingHelp" class="form-text text-muted">Masukkan jari-jari yang akan dihitung kelilingnya.</small>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 rounded-pill">Submit</button>
                </form>
            </div>
            <div class="col-6 border rounded shadow">
                <h3 class="text-center">Hasil Perhitungan</h3>
                <table class="table">
                    <tbody>
                        <?php if (!empty($luas)) : ?>
                            <tr>
                                <td>
                                    <h5>Luas</h5>
                                </td>
                                <td>
                                    <p><?php echo "Luas Lingkaran dengan jari-jari : " . $jari1 . " adalah = " . $luas; ?></p>
                                </td>
                            </tr>
                        <?php endif ?>
                        <?php if (!empty($keliling)) : ?>
                            <tr>
                                <td>
                                    <h5>Keliling</h5>
                                </td>
                                <td>
                                    <p><?php echo "Keliling Lingkaran dengan jari-jari : " . $jari2 . " adalah = " . $keliling; ?></p>
                                </td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            <?php if (!empty($keliling || $luas)) : ?>
                <p><?php echo "Perhitungan membutuhkan waktu &nbsp&nbsp&nbsp&nbsp= " . ($waktu * 1000) . "ms"; ?></p>
                <p><?php echo "Perhitungan membutuhkan memory = " . $this->benchmark->memory_usage() ?></p>
            <?php endif ?>
            </div>
        </div>
    </div>
</main>