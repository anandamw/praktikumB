<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumenep</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('header.php') ?>


    <!-- main -->
    <div class="main">
        <div class="content-main">
            <h1>Sumenep</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatibus rerum consequatur earum eveniet, itaque neque corrupti placeat dolorem eligendi.</p>
        </div>

    </div>

    <!-- about -->
    <section id="about">
        <img class="profile" src="./images/profile.jpg" alt="" />
        <div class="des-profile">
            <h1 id="profile">Profile</h1>
            <p>
                Wilayah Kabupaten Sumenep berada diujung timur Pulau Madura dimana
                terdapat 27 Kecamatan, 19 Kecamatan daratan dan 8 Kecamatan kepulauan.
                Kabupaten Sumenep memiliki 126 pulau (sesuai dengan hasil sinkronisasi
                luas Kabupaten Sumenep Tahun 2002), tersebar membentuk gugusan
                pulau-pulau baik berpenghuni (48 pulau) maupun tidak berpenghuni (78
                pulau). Pulau paling utara adalah Pulau Karamian yang terletak di
                Kecamatan Masalembu dengan jarak ±151 mil laut dari Pelabuhan
                Kalianget, dan pulau yang paling timur adalah Pulau Sakala dengan
                jarak ±165 miI laut dari Pelabuhan Kalianget.
            </p>
        </div>
    </section>
    <!-- contact -->
    <section id="contact">
        <img class="maps" src="./images/maps musium .jpg" alt="" />

        <form action="" class="form">
            <h1 class="contact-h1">Contact Us</h1>
            <div class="form-input">
                <div class="input-label">
                    <label for="username">email</label>
                    <input type="text" name="username" id="username" />
                    <label for="username">Username</label>

                    <input type="text" name="username" id="username" />
                </div>
                <label for="username">Message</label>

                <textarea name="" id=""></textarea>
            </div>
        </form>
    </section>






    <!-- footer -->

    <?php include('footer.php')  ?>

</body>

</html>