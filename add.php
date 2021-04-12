<html>
    <head>
        <title>
            Add Data
        </title>
    </head>
    <body>
        <?php
        require_once('config.php');
        
        function testInput($data){
            $data = ____6____($data);//Strip whitespace (or other characters) from the beginning and end of a string
            $data = ____7____($data);//Returns a string with backslashes stripped off
            $data = ____8____($data);//Prevent XSS attacks.
            return $data;
        }

        if(isset($_POST['submit'])){//Check if form has been submitted
            $name = testInput($_POST['____9____']);
            $age = testInput($_POST['____10____']);
            $email = testInput($_POST['____11____']);
        }

        //Checking Empty Fields

        if(empty($name) || empty($age) || empty($email)){//Check if some fields are required
            echo "<font color='red'> No field should be left empty....</font><br>";
        }
        else{
            $sql = "INSERT INTO users (name, age, email) VALUES (____12____)";

            if(____13____ == TRUE){
                echo 'New Record Has Been Added Successfully...';
                echo "<br><a href='index.php'>View Records</a>";
            }
            else{
                echo 'Error: '. $sql . "<br>" . $mysqli->____14____;
            }
        }

        ?>
    </body>
</html>