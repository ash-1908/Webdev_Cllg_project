<?php
// including the database connection file
include_once("config.php");
include_once('common.php');
 
if(isset($_POST['____24____']))
{    
    ____25____ = $_POST['id'];
    ____26____ = $_POST['name'];
    ____27____ = $_POST['age'];
    ____28____ = $_POST['email'];    
    
    // checking empty fields
    if(empty($name) || empty($age) || empty($email)){
            echo "<font color='red'> No field should be left empty....</font><br>";
    } 
    else {    
        //updating the table
        $sql = "UPDATE users ____29____";
        $result = ____30____;
        //redirectig to the home page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>

<?php
//getting id from url
$id = ____31____;

//selecting data associated with this particular id
$sql = "SELECT * ____32____";
$result = $mysqli____33____;
 
while($row = ____34____->fetch_array())
{
    $name = ____35____;
    $age = ____36____;
    $email = ____37____;
}
?>
<html>
<head>    
    <title>Edit Record</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <section id="contact">
        <div class="contact-section">
        <div class="container">
            <form action="edit.php" method='post' name='form1'>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="text" class="form-control" name="name" value="____38____" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" min=0 max=150 class="form-control" name="age" value="____39____" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" value="____40____" required>
                    </div>  
                    <div>
                        <input type="hidden" name="id" value=<?php echo ____41____;?>><!-- Why This hidden ID field is needed??-->
                        <input type="submit" class="btn btn-default submit fa fa-paper-plane" name='update' value="update">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
</body>
</html>
