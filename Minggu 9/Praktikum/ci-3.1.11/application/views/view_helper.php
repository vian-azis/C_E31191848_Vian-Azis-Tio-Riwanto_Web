<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E31191848 - Vian Azis Tio Riwanto</title>
</head>

<body>

    <?php
    echo heading("Hello CI", 1);
    echo heading("Hello CI ", 2);
    echo heading("Hello CI ", 3);
    echo heading("Hello CI ", 4);
    echo heading("Hello CI ", 5);
    echo heading("Hello CI ", 6);

    $gambar = array(
        'src' => 'https://static.cdn-cdpl.com/source/17045/codeignitor_service_provider-image(700x350-crop)-image(700x350-crop).jpg',
        'alt' => 'Codeigniter - CI',
        'class' => 'post_images',
        'width' => '300',
        'height' => '300',
        'title' => 'Artesonraju Mountain'
    );
    echo img($gambar);
    ?>

</body>

</html>