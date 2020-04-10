
<!DOCTYPE html>
<html>  
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     
        <title> CHAT </title>

       


       <style>
          body
       {
           background-image:url("https://coolbackgrounds.io/images/backgrounds/index/ranger-4df6c1b6.png");
             background-repeat:no-repeat;
             background-size:1550px 1000px;
       }

        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 20px;;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        th
        {
            background-color: #52BE80;
            text-align:center;
            border:1.5px solid ;
            border-color:black;
        }
        table{
            font-family:sans-serif;
            border:2px solid black;

        }
            table,tr,td
            {
                border: 1.5px solid black;
                text-align:center;
                background-color:white;

            }
            tr
            {
               background-color:white;
            }
            #move{
margin-left:10px;
margin-top:400px;
}
        </style>

        </head>
        <body>
        <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Messages</h2>
                        </div>
</div>
</div>
<div>
<?php
 
    $asc_query = "SELECT * FROM login";
    $result = executeQuery($asc_query);


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "yesplus");
    $result = mysqli_query($connect, $query);
    return $result;
}
echo "<table class='table table-bordered table-striped'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Email</th>";
                    echo "<th>Phone</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td><a href='delete.php?id=".$row['email']."'>DELETE</a></td>"; 
                echo "</tr>";
            }
            echo "</tbody>";                            
        echo "</table>";
        // Free result set
        mysqli_free_result($result);

?>

<a href="admin.php" id="move" class="btn btn-warning pull-top">back home</a></p>
    </body>
</html>
