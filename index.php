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
                <li class="selected">
                    <a href="index.php">Home</a>
                </li>
                <li>
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
            <h1>Directions to go Through</h1>
            <h4>Follow instructions</h4>
            <h5>--by Team</h5>
            <p>Our website navigates you to the four pages first is person which displays the details of members.Second page
                is Room which show the room details and the next one is key which displays Key details
                <br />
                <a href="#">Read more</a>
            </p>
            <h1>Useful Links</h1>
            <ul>
                <li>
                    <a href="www.google.com">Google</a>
                </li>
                <li>
                    <a href="www.wikipedia.com">wikipedia</a>
                </li>
                <li>
                    <a href="www.youtube.com">Youtube</a>
                </li>
                <li>
                    <a href="www.yahoo.com">yahoo</a>
                </li>
            </ul>
            <h1>Search</h1>
            <form method="post" action="#" id="search_form">
                <p>
                    <input class="search" type="text" name="search_field" value="Enter keywords....." />
                    <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search"
                    />
                </p>
            </form>
        </div>
        <div id="content">

            <!-- php code goes here -->

        </div>
    </div>
    <div id="footer">
        <p>
            <a href="index.html">Home</a> |
            <a href="person.html">Person</a> |
            <a href="room.html">Room</a> |
            <a href="key.html">Key</a> |
            <a href="contact.html">Contact Us</a>
        </p>
    </div>
</div>
<?php include 'footer.php';?>