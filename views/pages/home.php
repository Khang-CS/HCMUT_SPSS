<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navigationBar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HCMT SPSO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage Printers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage System Configuration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Printing Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Feature</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <!-- Your content goes here -->
                    <a class="nav-link logoutButton" href="login.html">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <section class="homePage">
        <h1>HOME</h1>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-4 feature">
                    <div class="featureContent">
                        <h2><a href="/index.php?controller=pages&action=managePrinters">MANAGE PRINTERS</a></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 feature">
                    <div class="featureContent">
                        <h2><a href="#">MANAGE SYSTEM CONFIGURATION</a></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 feature">
                    <div class="featureContent">
                        <h2><a href="#">VIEW PRINTING LOGS</a></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 feature">
                    <div class="featureContent">
                        <h2><a href="#">VIEW REPORTS</a></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 feature">
                    <div class="featureContent">
                        <h2><a href="#">NOTIFICATIONS</a></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 feature">
                    <div class="featureContent">
                        <h2><a href="#">NEW FEATURES</a></h2>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/de521be8bb.js" crossorigin="anonymous"></script>
</body>

</html>