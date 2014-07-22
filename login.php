<!doctype html>
<html>
    <head><?php include 'theme/header.phtml' ?></head>
    <body>
        <article class="container">
            <?php include 'theme/branding.phtml' ?>
            <h2>Sign in</h2>
            <form method="post" action="authenticate.php" id="login-form">
                <p class="errors"></p>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" name="login" id="login" value="Login" class="btn btn-default">
            </form>
        </article>
        <?php include 'theme/scripts.phtml' ?>
        <script src="assets/scripts/login.js"></script>
    </body>
</html>