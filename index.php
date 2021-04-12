<html>
    <head>
        <title>
            Home
        </title>
        <style>
            table{
                border-collapse: collapse; 
            }
            th{
                border: dashed 1px;
                text-align: left;
            }
            td{
                border: dashed 1px;
                width: 200px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
        <?php
        require_once('config.php');
        $sql = "SELECT * FROM users ORDER BY id";//Select users and order by id in ascending order
        $result = $mysqli->query($sql);

        if($result->num_rows > 0){
            //Output Data of Each Row
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><button style='width:70px;'><a href='____edit.php____'>Edit</a></button> | 
                <button style='width:70px;'><a href='delete.php?id=$row[id]' onClick='____19____'>Delete</a></button></td>";     
                echo "</tr>";
            }
        }
        else{
            echo "No row to display";
        }
        ?>
        </tbody>
        </table>
    </body>
</html>