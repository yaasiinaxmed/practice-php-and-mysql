<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial=scale-1.0">
    <title>Ramadan Practice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Number</th>
                </tr>
            </thead>
            <tbody>

               <?php

                // $query = "SELECT * FROM arday";
                $result = $conn->query($query); 
                $htmlTable = "";

                if($result){
                   $htmlTable .= "<tr>";

                   while($row = $result->fetch_assoc()){
                     $htmlTable .= "<td>" . $row["ID"] . "</td>";
                     $htmlTable .= "<td>" . $row["Name"] . "</td>";
                     $htmlTable .= "<td>" . $row["Email"] . "</td>";
                     $htmlTable .= "<td>" . $row["Number"] . "</td>";

                     $htmlTable .= "</tr>";
                   }

                   echo $htmlTable;
                     
                }else {
                    $result = $conn->error;
                }

               ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>