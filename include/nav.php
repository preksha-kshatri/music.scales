<link rel="stylesheet" href="css/nav.css">
<script src="https://kit.fontawesome.com/cacd88a93b.js" crossorigin="anonymous"></script>
<nav>
    <a href="index.php"><img src="admin/images/logo.png"></a>
    <div id="nav_links" class="links">
        <i class="fa fa-times" onclick="hide()"></i>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <button onclick="location.href='signin.php'" class="login">LOGIN</button>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="show()"></i>
</nav>

<script>
    var X = document.getElementById("nav_links");

    function show() {
        X.style.right = "0";
    }

    function hide() {
        X.style.right = "-200px";
    }
</script>