<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table-style.css">
    <title>Green Leaf Table</title>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>

<body>

    <div class="container">
        <h1>Inquiry Table</h1>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "greenleaf";

            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Create table
            $stmt = mysqli_prepare($conn, "SELECT inquiry_id, name, email, message, date FROM inquiry");
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $inquiry_id, $name, $email, $message, $date);

            echo "<table>
                    <tr>
                        <th>Inquiry ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>";

            while (mysqli_stmt_fetch($stmt)) {
                echo "
                    <tr>
                        <td>{$inquiry_id}</td>
                        <td>{$name}</td>
                        <td>{$email}</td>
                        <td>{$message}</td>
                        <td>{$date}</td>
                    </tr>
                ";
            }
            echo "</table>";

            // Close the connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        ?>

    </div>

</body>

</html>