
    
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
                <li class="selected">
                    <a href="person.php">Person</a>
                </li>
                <li>
                    <a href="room.php">Room</a>
                </li>
                <li>
                    <a href="key.php">Key</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
            <h3>Add New Person</h3>
        <form method="post" action="getPerson.php">
            First name:<br>
            <input type="text" name="firstname" value="Mickey" required>
            <br>
            Last name:<br>
            <input type="text" name="lastname" value="Mouse" required>
            <br><br>
            <input type="submit" value="Submit">
            </form> 
        </div>
        <div id="content">

            <!-- php code goes here -->
            <a href="getPerson.php">Retrieve data</a>
        </div>
    </div>
    
</div>


<?php include 'footer.php';?>