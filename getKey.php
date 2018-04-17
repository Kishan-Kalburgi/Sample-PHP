<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!empty($_POST["material"])) {
    $sql = "INSERT INTO project.key (type, material)
VALUES ('".$_POST['type']."','".$_POST['material']."')";
    if ($conn->query($sql) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//echo "Connected successfully";
$sql = "SELECT * FROM project.key";
$result = $conn->query($sql);
?>
  
<?php include 'header.php';?>
<div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <!-- class="logo_colour", allows you to change the colour of the text -->
                <h1>
                    <a href="index.html">Welcome to
                        <span class="logo_colour">Pro</span>
                    </a>
                </h1>
                <h2>Simple way to organize room details</h2>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li >
                    <a href="index.php">Home</a>
                </li>
                <li >
                    <a href="person.php">Person</a>
                </li>
                <li>
                    <a href="room.php">Room</a>
                </li>
                <li class="selected">
                    <a href="key.php">Key</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
        <h3>Add New Key</h3>
        <form method="post" action="getKey.php">
            Type:<br>
            <select name="type" required>
                <option value="master">master</option>
                <option value="normal">normal</option>
            </select>
            <br>
            Material:<br>
            <input type="text" name="material" value="Steel" required>
            <br>
            <br>
            <input type="submit" value="Submit">
            </form> 
        </div>
        <div id="content">
        <h3> Keys List</h3>
        <table>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Material</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr><td>" . $row["id"]."</td><td>" . $row["type"]."</td><td>" . $row["material"]."</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
        </div>
    </div>
    
</div>

<?php include 'footer.php';

$conn->close();
?>