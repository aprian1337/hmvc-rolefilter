<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main/main.css">
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <h1>Halaman Masuk</h1>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">About</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="/auth/login" method="post">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" name="username" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                    </form>
                </div>
                <div class="about-htm">
                    <div class="group">
                        <p>Made by love with coffee </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) {
    ?>
        <script>
            alert(
                <?php foreach ($errors as $e) : ?> <?= esc($e) ?> <?php endforeach; ?>
            )
        </script>
    <?php } ?>
    <?php if (session()->getFlashdata('fail')) { ?>
        <script>
            alert(
                'Username atau password tidak ditemukan'
            )
        </script>
    <?php } ?>

    <?php if (session()->getFlashdata('success')) { ?>
        <script>
            alert(
                'Logout berhasil'
            )
        </script>
    <?php } ?>

    ?>
</body>

</html>