<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">My PHP Project</a>
            <ul class="navbar-nav">
                <li><a href="web.php?page=home" class="nav-link">Home</a></li>
                <li><a href="web.php?page=about" class="nav-link">About</a></li>
                <li><a href="web.php?page=contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <h1>
                            This is about page
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>

</body>

</html>