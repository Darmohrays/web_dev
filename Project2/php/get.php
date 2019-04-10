<!DOCTYPE html>
<html>

    <head>
        <title>Get</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <div class="navbar">
            <a href="../index.html">home</a>

            <div class="dropdown">
                <button class="dropbtn">form
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../menu/get.html">Get</a>
                    <a href="../menu/post.html">Post</a>
                    <a href="../menu/file_upload.html">file upload</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">cookies
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../menu/enabled_disabled.html">enabled/disabled</a>
                    <a href="../menu/create_retrieve.html">create/retrieve</a>
                    <a href="../menu/modify_delete.html">modify/delete</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">sessions
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../menu/start.html">start</a>
                    <a href="../menu/get_modify.html">get/modify</a>
                    <a href="../menu/destroy.html">destroy</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">date/time
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../menu/today_is.html">today is</a>
                    <a href="../menu/timezone.html">timezone</a>
                    <a href="../menu/timestamp.html">timestamp</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">database
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../menu/reserved.html">(reserved)</a>
                </div>
                
            </div>

            <a href="../menu/phpinfo.html">Phpinfo</a>
        </div>

        <div>
            <p style="color: white; display: table; margin: 0 auto"> Welcome <?php echo $_GET["name"]; ?><br></p>
            <p style="color: white; display: table; margin: 0 auto"> Your email address is: <?php echo $_GET["email"]; ?> </p>
        </div>

    </body>

</html>