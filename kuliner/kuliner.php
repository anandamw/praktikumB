<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./kuliners.css">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>

    <?php include('./header.php') ?>



    <div class="container-main">

    </div>

    <div class="list-title">
        <h1>Kuliner</h1>
    </div>

    <div class="card-containt">
        <div class="card">
            <div class="card-list">
                <div class="card-img">
                    <img src="./img/cakee.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_kuliner/cake.php">Cake</a>
                    </h3>
                </div>
            </div>

            <div class="card-list">
                <div class="card-img">
                    <img src="./img/campor.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_kuliner/campor.php">Campor</a>
                    </h3>
                </div>
            </div>
            <div class="card-list">
                <div class="card-img">
                    <img src="./img/gettas.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_kuliner/gettas.php">Gettas</a>
                    </h3>
                </div>
            </div>
            <div class="card-list">
                <div class="card-img">
                    <img src="./img/mentho.jpg" width="200" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_kuliner/mentho.php">Mentho</a>
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