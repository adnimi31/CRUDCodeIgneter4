<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- css custom sendiri -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="js/jquery.min.js"></script>

    <link rel="icon" href="/images/Logo.png">
    <title><?= $title; ?></title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/users">Contoh CRUD</a>
                    <a class="nav-link" href="/negara">Negara</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>
    <?= $this->renderSection('content'); ?>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</html>