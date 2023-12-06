<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/stylesheets/style.css">

    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            padding: 12px 20px;
            border: 5px solid black;
            border-radius: 30px;
            width: 200px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: grey;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section class="homePage">
        <h1>ADD NEW PRINTER</h1>
    </section>
    <section class="">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-25">
                        <label for="printerID">Printer ID:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="printerID" name="printerID" placeholder="Enter Printer ID">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="brand">Brand</label>
                    </div>
                    <div class="col-75">
                        <select id="brand" name="brand">
                            <option value="canon">Canon</option>
                            <option value="sony">Sony</option>
                            <option value="panasonic">Panasonic</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="printerModel">Printer model:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="printerModel" name="printerModel" placeholder="Enter Printer model">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="campus">Campus:</label>
                    </div>
                    <div class="col-75">
                        <select id="campus" name="campus">
                            <option value="canon">H1</option>
                            <option value="sony">H2</option>
                            <option value="panasonic">H3</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="campus">Room:</label>
                    </div>
                    <div class="col-75">
                        <select id="campus" name="campus">
                            <option value="canon">301</option>
                            <option value="sony">302</option>
                            <option value="panasonic">303</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Description</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Add New Printer">
                </div>
            </form>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/de521be8bb.js" crossorigin="anonymous"></script>
</body>

</html>