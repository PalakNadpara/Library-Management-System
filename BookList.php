<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Issue</title>
    <style>
        h1 {
            margin-left: 45%;
            margin-top: 2rem;
        }

        span {
            margin-left: 0rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Charusat Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>



    <div id="table">
        <h1><strong>Book List</strong></h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"><span>Book ID</span></th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Book Author</th>
                    <th scope="col">Book Category</th>

                </tr>
            </thead>
            <tbody id='tableBody'></tbody>
            <?php
            include('connect1.php');
            session_start();
            $sql = "SELECT Book_Id,Book_Name,Author_Name,Category FROM Book_List;";
            $res = $con1->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo "<tr><td>" .$row["Book_Id"] . "</td><td>" . $row["Book_Name"] . "</td><td>" . $row["Author_Name"] . "</td><td>" . $row["Category"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 result";
            }
            $con1->close();
            ?>
    </div>
    </div>


</body>

</html>