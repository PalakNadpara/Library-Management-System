<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Late Submission</title>
    <style>
        h1{
            text-align: center;
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

    <div id="message"></div>

    <div id="table">
        <h1>Pending Submission</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Recipient Name</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Book ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody id='tableBody'>
                <?php
                include('connect2.php');
                $crr = date("Y-m-d");
                $sql = "SELECT RName, BName, Id, AName, BookType FROM Book_Issue 
                        WHERE RtDate < ?";
                $stmt = $con2->prepare($sql);
                $stmt->bind_param("s", $crr);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["RName"] . "</td><td>" . $row["BName"] . "</td><td>" . $row["Id"] . "</td><td>" . $row["AName"] . "</td><td>" . $row["BookType"] . "</td></tr>";
                    }
                } else {
                    echo "<h1> No Late Submission is remaining</h1>";
                }
                $stmt->close();
                $con2->close();
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>