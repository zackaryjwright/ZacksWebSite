<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zack's Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/site_main.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/buttons.css">
    <link rel="stylesheet" href="../css/grid.css">
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>
<body onload="startTime()">
<div class="header">
    <a href="index.html"><img src="../images/logo/z_tech_outline.gif" alt="Site Logo"></a>
    <h2>Zack's Site</h2>
</div>
<div class="top_nav">
    <a href="../index.html">Home</a>
    <a href="../pages/gallery.html">Gallery</a>
    <a href="../pages/notes.html">Notes</a>
    <a href=../"pages/metro_menu.html">Alt-Menu</a>
    <a href="../pages/file_upload.html">Image Upload</a>
    <a class="right" id="time"></a>
    <a class="right" id="date"></a>
</div>
<div class="row">
    <div class="column side"></div>
    <div class="column middle">
        <p>Your IP address is: <? echo $_SERVER["REMOTE_ADDR"]; ?></p>
        <p>Your Browser info is:<? echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p>Your User Name is:<? echo $_SERVER['REMOTE_USER']; ?></p>
        <?php

        /* our simple php ping function */
        function ping($host)
        {
            exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
            return $rval === 0;
        }

        /* check if the host is up
                $host can also be an ip address */
        $host = 'www.google.com';
        $up = ping($host);

        /* optionally display either a red or green image to signify the server status */
        echo '<img src="'.($up ? 'on' : 'off').'.jpg" alt="'.($up ? 'up' : 'down').'" />';

        ?>

    </div>
    <div class="column side"></div>
</div>
<div class="bottom_nav">
    <a href="../index.html">Home</a>
    <a href="../pages/gallery.html">Gallery</a>
    <a href="../pages/notes.html">Notes</a>
    <a href="../pages/metro_menu.html">Alt-Menu</a>
</div>
<div class="footer">
    <p>&copy;Zack's Workshop 2019</p>
</div>
<script>
    var d = new Date();
    document.getElementById("date").innerHTML = d.toDateString();
</script>
</body>
</html>
