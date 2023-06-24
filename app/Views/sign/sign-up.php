<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url(
                                                        'css/main.css'
                                                    ) ?>" />
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="wraper">
            <div class="image--container" style="background: url(<?= base_url(
                                                                        'img/logomota.jpg'
                                                                    ) ?>); background-position:center; background-size:cover;"></div>
            <div class="login-container__main">
                <div class="login-container__title">Register</div>
                <form class="login-form" action="/prosesregist" method="POST">
                    <?= csrf_field() ?>
                    <div class="login-form__input-email">
                        <label for="name">Username </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Your Username" required />
                    </div>
                    <div class="login-form__input-email">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required />
                    </div>
                    <div class="login-form__input-email">
                        <label for="no_telpon">nomor telpon</label>
                        <input type="text" class="form-control" id="notelpon" name="no_telpon" placeholder="Your Nomor Telpon" required />
                    </div>
                    <div class="login-form__input-password">
                        <label for="password">password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" required />
                    </div>
                    <?php if (session()->getFlashdata('pesan')) {
                        echo '<p style="text-align:center; color:white;">';
                        echo session()->getFlashdata('pesan');
                        echo '</p>';
                    } ?>
                    <button class="login-form__button" type="submit">REGISTER</button>
                    <div class="newuser__sign-in">Have an account?<a href="/login"> Sign In</a></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>