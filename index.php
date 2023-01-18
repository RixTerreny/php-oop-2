<?php
include_once "./classi/padre.php";
include_once "./classi/figlio.php";

$lista = [
    $oggetto_1 = new Categoria("collare", "18.99", "https://cdn.shopify.com/s/files/1/0553/9407/4798/products/4432-ME2_1100x.jpg?v=1660410392", 1, "collari"),
    $oggetto_2 = new Categoria("Pettorina da battaglia", "104.69", "https://m.media-amazon.com/images/I/71mtfKxaryL._AC_SX679_.jpg", 3, "GALLLLOOOOOOOOOOOOO!!!!"),
    $oggetto_3 = new Categoria("Cuccia cane", "27.99", "https://www.viridea.it/wp-content/uploads/2019/06/consiglio-accessori-indispensabili-cucciolo-cane.jpg", 1, "cuccia"),
    $oggetto_4 = new Categoria("Cibo per Gatti", "4.99", "https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/0/00000080393337_c1c1_44087473_1.jpg", 0, "cibo"),
    $oggetto_5 = new Categoria("Cuffia per gatti", "18.99", "https://images.pexels.com/photos/4587959/pexels-photo-4587959.jpeg?auto=compress&cs=tinysrgb&w=1600", 0, "altri"),
    $oggetto_6 = new Categoria("Giracani a batteria", "34.99", "https://i.kym-cdn.com/photos/images/newsfeed/002/066/967/b85.gif", 1, "altri")
];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>


<body>
    <div class="container">
        <h1>Pet</h1>
        <div class="row g-3">
            <?php foreach ($lista as $oggetto) {  ?>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $oggetto->getImmagine() ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $oggetto->getTitolo() ?></h5>
                            <div class="card-text"><?php echo $oggetto->getPrezzo() ?> &#8364;</div>
                            <div class="card-text"><?php echo $oggetto->getItem() ?></div>
                            <i class="<?php echo $oggetto->getCategoria() ?> d-block my-1"></i>
                            <a href="#" class="btn btn-primary mt-2">Compra</a>
                        </div>
                    </div>
                </div>

            <?php }  ?>
        </div>
    </div>
</body>

</html>