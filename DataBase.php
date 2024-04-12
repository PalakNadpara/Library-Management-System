<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Base</title>
    <style>
        h1{
            margin-left: 44%;
            padding: 1rem;
        }
        h3{
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
            <h1>Data Base</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Collage</th>
                        <th scope="col">Department</th>
                        <th scope="col">ID No.</th>
                        <th scope="col">Email-Id</th>
                        <th scope="col">Mo. No.</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody id='tableBody'></tbody>
                <?php
        include('connect.php');
        session_start();
        $sql = "select FName, DOB, Collage, Department, Collage_Id, Email, Mobile_No,Address from Member_Info;";
        $res = $con->query($sql);
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "<tr><td>" . $row["FName"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Collage"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["Collage_Id"] . "</td><td>" .$row["Email"] . "</td><td>" . $row["Mobile_No"] . "</td><td>" . $row["Address"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h3>Currently no members are there in the Database.</h3>";
        }
        $con->close();
        ?>
            </table>
        </div>
    </div>
</body>

</html>
