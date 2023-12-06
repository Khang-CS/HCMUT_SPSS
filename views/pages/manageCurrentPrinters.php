<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section class="homePage">
        <h1>MANAGE CURRENT PRINTERS</h1>

        <form class="form searchForm">
            <input type="text" class="searchField" id="searchInput" placeholder="Search">
            <input type="submit" class="searchButton" value="Search">
        </form>

        <form action="" class="filterForm">
            <!-- Dropdown list -->
            <select id="campus" name="campus">
                <option value="1">Ly Thuong Kiet</option>
                <option value="2">Di An</option>
                <!-- Add more options as needed -->
            </select>

            <select id="building" name="building">
                <option value="h1">H1</option>
                <option value="h2">H2</option>
                <!-- Add more options as needed -->
            </select>
            <select id="room" name="room">
                <option value="305">305</option>
                <option value="306">306</option>
                <!-- Add more options as needed -->
            </select>
            <input type="submit" class="searchButton" value="Filter">
        </form>
    </section>

    <section class="list">
        <div class="container">
            <div class="row g-4 listRow">
                <?php
                foreach ($printerList as $printer) {
                ?>
                <div class="col-xxl-3 col-lg-4 col-md-6 printerCol">
                    <form action="" class="printer">
                        <img src="../assets/images/icon.png" alt="">
                        <h5><?php echo 'Model: ' . $printer->printerModel; ?></h5>
                        <h5><?php echo 'ID: ' . $printer->printerID; ?></h5>
                        <h5><?php echo $printer->campus . ' - ' . $printer->building . ' - ' . $printer->room ?></h5>
                        <a href="<?php echo '/index.php?controller=pages&action=viewAndEdit&printerID=' . $printer->printerID; ?>"
                            class="moreButton">MORE</a>
                        <a href="" class="deleteButton">DELETE</a>
                    </form>
                </div>
                <?php
                } ?>
            </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/de521be8bb.js" crossorigin="anonymous"></script>
</body>

</html>