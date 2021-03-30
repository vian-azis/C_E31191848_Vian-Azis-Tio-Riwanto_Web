<html>

<head>
    <title>Heading Helper HTML</title>
</head>

<body>
    <h1>Hello CI</h1>
    <h2>Hello CI</h2>
    <h3>Hello CI</h3>
    <h4>Hello CI</h4>
    <h5>Hello CI</h5>
    <h6>Hello CI</h6>
    
    <?php
    /* CI 4 Tidak support heading function pada html helper
        echo heading("Hello CI", 1);
        echo heading("Hello CI ", 2);
        echo heading("Hello CI ", 3);
        echo heading("Hello CI ", 4);
        echo heading("Hello CI ", 5);
        echo heading("Hello CI ", 6);
    */

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