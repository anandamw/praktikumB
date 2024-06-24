<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="header_budaya.css">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>

    <?php include('./header.php') ?>



    <div class="container-main">

    </div>

    <div class="list-title">
        <h1>Budaya</h1>
    </div>

    <div class="card-containt">
        <div class="card">
            <div class="card-list">
                <div class="card-img">
                    <img src="../budaya/img/kerapan sapi.jpg" style="width: 200px;" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_budaya/kerapan_sapi.php">Kerapan Sapi</a>
                    </h3>
                </div>
            </div>

            <div class="card-list">
                <div class="card-img">
                    <img src="../budaya/img/muang sangkal.jpg" style="width: 200px;" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_budaya/muang_sangkal.php">Muang Sangkal</a>
                    </h3>
                </div>
            </div>
            <div class="card-list">
                <div class="card-img">
                    <img src="../budaya/img/rokat tasek.jpg" style="width: 200px;" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_budaya/rokat_tasek.php">Rokat Tasek</a>
                    </h3>
                </div>
            </div>
            <div class="card-list">
                <div class="card-img">
                    <img src="../budaya/img/tongtong.jpg" style="width: 200px;" alt="">
                </div>
                <div class="card-title">
                    <h3> <a href="detail_budaya/tongtong.php">Tong Tong</a>
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