<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./detail.css">
    <link rel="stylesheet" href="../../style.css">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>

    <!-- header  -->
    <div class="header">
        <img src="../../images/logo.png" class="logo" alt="">
        <ul class="ul-list">
            <li><a href="../../index.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Pimpinan Daerah &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="../../pimpinan/bupati.php">Bupati</a></li>
                    <li><a href="../../pimpinan/sekertaris_daerah.php">Sekertaris</a></li>
                    <li><a href="../../pimpinan/wakilbupati.php">Wakil Bupati</a></li>
                </ul>
            </li>
            <li><a href="../../kuliner/kuliner.php ">Kuliner</a></li>
            <li><a href="../../budaya/budaya.php ">Budaya</a></li>
            <li><a href="../../wisata/wisata.php ">Wisata</a></li>
        </ul>
    </div>

    <div class="main-h">
        <div class="container-h">

            <div class="img-budaya">
                <img src="../img/tongtong.jpg" alt="">
            </div>

            <div class="title-budaya">

                <h1>
                    Budaya Tong Tong
                </h1>
                <h4>Admin</h4>


                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ipsa non impedit. Aperiam, consequatur id a autem dolores reprehenderit consequuntur ex fuga expedita ipsam iure voluptatem commodi nostrum aliquid. Optio necessitatibus, soluta laudantium, ut facere commodi velit aut doloribus eligendi porro officia. Eaque recusandae nobis voluptates autem atque itaque consequuntur odio, tempora, necessitatibus quia reprehenderit eligendi suscipit. Earum dolorum natus qui accusantium omnis mollitia tenetur eaque. Cumque nulla nisi iste fuga eligendi numquam cupiditate velit id labore, culpa libero non commodi doloremque quod esse quo! Sequi eius totam porro nam beatae itaque quisquam aperiam quas, natus, omnis impedit nulla amet.
                </p>
            </div>
        </div>


    </div>


    <?php include('../../footer.php'); ?>

    <script>
        feather.replace();
    </script>

</body>

</html>