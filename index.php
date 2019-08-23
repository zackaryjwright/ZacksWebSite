<!DOCTYPE html>
<html lang="en">
<head>
<title>Zack's Site</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/site_main.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/buttons.css">
<link rel="stylesheet" href="css/grid.css">
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
        <a href="index.php"><img src="images/logo/z_tech_outline.gif" alt="Site Logo"></a>
        <h2>Zack's Site</h2>
    </div>
    <div class="top_nav">
        <a href="index.php">Home</a>
        <a href="pages/snippets.html">Snippets</a>
        <a class="right" id="time"></a>
        <a class="right" id="date"></a>
    </div>
    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <div class="grid-container">
                <div class="site"><a href="https://google.com" target="_blank">Google</a></div>
                <div class="site"><a href="https://slashdot.org/" target="_blank">Slashdot</a></div>
                <div class="site"><a href="https://www.jcu.edu.au/learn" target="_blank">Learn JCU</a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="local"><a href="http://192.168.1.10:8080/cgi-bin/" target="_blank">Tardis02</a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="local"><a href="http://192.168.1.10:32400/web/index.html" target="_blank">Plex - Admin</a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="local"><a href="pages/Gallery.html" target="_blank">Gallery</a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="system"><a href="apps/phpservermon/index.php" target="_blank">php Monitor</a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="system"><a href="apps/phpFileManager-1.7.8/index.php" target="_blank">php File Manager</a></div>
                <div class="system"><a href="apps/webconsole/webconsole.php" target="_blank">Web Console</a></div>
                <div class="system"><a href="http://192.168.1.251/phpMyAdmin/index.php target="_blank">NasBook - php admin</a></div>
                <div class="local"><a href="http://192.168.1.251:8080/filestation/" target="_blank">Filestation - Nasbook</a></div>
                <div class="local"><a href="http://192.168.1.251:8080/cgi-bin/" target="_blank">Nasbook</a></div>
                <div class="default"><a href="" target="_blank"></a></div>
                <div class="games"><a href="apps/tetris/index.html" target="_blank">Tetris</a></div>
                <div class="games"><a href="apps/pacman/index.htm" target="_blank">Pacman</a></div>
            </div>
        </div>
    <div class="column side"></div>
    </div>
    <div class="bottom_nav">
        <a href="index.html">Home</a>
        <a href="pages/snippets.html">Snippets</a>
        <form method="get" action="http://www.google.com/search">
            <input type="text"   name="q" size="31"
                   maxlength="255" value="" />
            <input type="submit" value="Google" />
        </form>
    </div>
    <div class="footer">
        <p class="align_left">&copy;Zack's Workshop 2019</p>
        <p class="align_right"><? echo $_SERVER["REMOTE_ADDR"]; ?></p>
    </div>
    <script>
        var d = new Date();
        document.getElementById("date").innerHTML = d.toDateString();
    </script>
</body>
</html>