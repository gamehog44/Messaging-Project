<?php
	session_start();
	
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first.";
		header('location: index.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

    <title>Lexicom Messaging</title>
</head>
<body class="h-100">
    <div class="h-100">
        <div data-role="navview">
            <div class="navview-pane text-center bg-white border-right bd-default">
                <div class="suggest-box pb-3 pt-2 border-bottom bd-default" style="overflow:hidden;">
                    <input data-role="search" data-clear-button="false">
                </div>
                <ul class="navview-menu h-100 pb-5">
					<li>
                        <a href="#">
                            <span class="w-100" style="height:50px;">Friend's Name</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="w-100" style="height:50px;">Friend's Name 2</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navview-content h-100">
                <div class="row border-bottom bd-default text-center pb-3 pt-2">
                    <div class="cell">
                        Header
                    </div>
					<p><a href="messaging.php?logout='1'" style="color: red;">Logout</a></p>
                </div>
                <div class="row bg-grayWhite" style="height:78%;">
                    <div class="cell">
                        <div class="row pl-5 pr-5">
                            <div class="cell p-1">
                                <button class="button secondary rounded disabled">Message</button>
                            </div>
                        </div>
                        <div class="row pl-5 pr-5">
                            <div class="cell p-1 text-right">
                                <button class="button primary rounded disabled">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 pb-1 pt-1 pl-3 border-top bd-default bg-white">
                    <div class="cell">
                        <textarea class="c-pointer" data-role="textarea" data-max-height="200" data-append="<span class='fg-blue'>Send</span>" placeholder="Type a message"></textarea>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>