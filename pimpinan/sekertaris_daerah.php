<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./pimpinan.css">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>

    <?php include('./header.php') ?>


    <!-- main -->
    <main class="main-pimpinan">
        <div class="container-pimpinan">
            <img src="../images/sekda.jpeg " alt="Gambar Bupati">
            <div class="container-right">
                <div class="item-pimpinan">
                    <div class="item-card">
                        <i class="ii" data-feather="user"></i>
                        <h2> Admin</h2>
                    </div>


                    <div class="item-card">
                        <i class="ii" data-feather="calendar"></i>
                        <h2>2021-07-05 09:09:58</h2>
                    </div>
                </div>

                <div>
                    <h1>Sekretaris Daerah
                    </h1>

                    <h1>Ir. Edy Rasyadi, M.Si

                    </h1>
                </div>

            </div>
        </div>
    </main>





    <?php include('../footer.php'); ?>

    <script>
        feather.replace();
    </script>
</body>

</html>