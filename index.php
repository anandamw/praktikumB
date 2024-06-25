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
            <h1 style="border-color: white; border: 2px; ">Sumenep</h1>
            <p style="font-size: 4rem;">Bumi Arya Wiraraja</p>
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
        <a href="https://maps.app.goo.gl/ARn8yBFVYrHN5Nbj9">

            <img class="maps" src="./images/maps musium .jpg" alt="" />
        </a>

        <form action="https://formspree.io/f/xnnaaobk" method="post" class="form">
            <h1 class="contact-h1">Contact Us</h1>
            <div class="form-input">
                <div class="input-label">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required />

                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required />
                </div>
                <label for="username">Message</label>

                <textarea name="message" id="message" required></textarea>

                <button type="submit" class="submit-btn" style="margin-top: 5px; background-color: #079b15; border: none; color: white; cursor: pointer;  padding: 5px 0;">Submit</button>
            </div>
        </form>
    </section>



    <!-- footer -->

    <?php include('footer.php')  ?>

</body>

</html>