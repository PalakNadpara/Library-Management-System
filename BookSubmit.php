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

    <div id="message"></div>


    <div class="container my-3">
        <h1>Book Submit</h1>
        <hr>
        <form action="BookSubmitRemove.php" method="post" id="libraryForm">
            <div class="form-group row">
                <label for="recipientName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="recipientName" name="Rname" placeholder="Recipient Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="bookName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bookName" name="Bname" placeholder="Book Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="bookid" class="col-sm-2 col-form-label">Book ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bookid" name="Bid" placeholder="Book ID">
                </div>
            </div>
            

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Remove</button>
                </div>
            </div>
        </form>

        <div id="table">
            <h1>Issued Books</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Recipient Name</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book ID</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody id='tableBody'></tbody>
                <?php
                    include('connect2.php');
                    // session_start();
                    $sql = "Select RName, BName, Id,BookType from Book_Issue;";
                    $res = $con2->query($sql);
                    if ($res->num_rows > 0)     
                    {
                    while ($row = $res->fetch_assoc())
                     {
                    echo "<tr><td>" . $row["RName"] . "</td><td>" . $row["BName"] . "</td><td>" . $row["Id"]."</td><td>" . $row["BookType"]."</td></tr>";
                    }
                    echo "</table>";
                    }
                    else{
                    echo "0 result";
                    }
                    $con2->close();
            ?>
        </div>
    </div>

</body>

</html>
