<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./wisata.css">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>

    <?php include('./header.php') ?>


    <div class="container-main">

    </div>

    <div class="list-title">
        <h1>Wisata</h1>
    </div>

    <div class="card-containt">
        <div class="card">
            <div class="card-list">
                <div class="card-img">
                    <img src="./img/asta tinggi.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_wisata/asta_tinggi.php">Asta Tinggi</a>
                    </h3>
                </div>
            </div>

            <div class="card-list">
                <div class="card-img">
                    <img src="./img/Labhang_Mesem.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_wisata/labang_mesem.php">Labang Mesem</a>
                    </h3>
                </div>
            </div>
            <div class="card-list">
                <div class="card-img">
                    <img src="./img/lombang.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_wisata/lombang.php">Lombang</a>
                    </h3>
                </div>
            </div>
            <div class="card-list">
                <div class="card-img">
                    <img src="./img/pantai-slopeng.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_wisata/pantai_selopeng.php">Pantai Slopeng</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>




    <?php include('../footer.php'); ?>

    <script>
        feather.replace();
    </script>
</body>

</html>