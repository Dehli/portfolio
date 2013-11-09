<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Christian Dehli</title>
		
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <link rel="stylesheet" href="/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
        
        <style type="text/css">
            * {
                font-family: Helvetica, sans-serif;
                margin: 0;
                padding: 0;
            }

            #headerContainer {
                background: #0f50f6;
                height: 100px;
                left: 0;
                position: fixed;
                width: 100%;
                top: 0px;
            }

            #header {
                line-height: 60px;
                margin: 0 auto;
                width: 900px;
                text-align: left;
                margin-top: 20px;
            }

            #container {
                margin: 0 auto;
                overflow: auto;
                padding: 125px 0;
                width: 900px;
            }

            #menu {
                list-style-type: none;
            }

            #menu li {
                display: inline;
                line-height: 30px;
            }

            #menu li a {
                padding: 0em 1em;
                background-color: #0A1650;
                color: White;
                text-decoration: none;
                float: left;
            }

            .rightBorder a {
                border-right: 1px solid #FFFFFF;
            }

            #menu li a:hover {
                background-color: #369;
            }
            
            #menu li a:hover + ul {
                display: block;
            }

            .submenu {
                display: none;
                padding-top: 31px;
                padding-left: 145px;
                width: 70px;
            }

            .submenu li {
                position: static;
                float: left;
                display: block;
            }

            .submenu li a {
                width: 70px;
            }

            .submenu:hover {
                display: block;
            }
            
        </style>
        
	</head>

	<body>
	    <div id="headerContainer">
	         <div id="header">
        	    <h1 id="myName"><span style="color:#0A1650;">christian</span> <span style="color:#FFFFFF;">dehli</span></h1>
        	    <div id="menu-holder">
                    <ul id="menu">
                        <li class="rightBorder"><a href="index.php">Home</a></li>
                        <li class="rightBorder"><a href="skills.php">Skills</a>
                        <li><a href="#">Projects</a>
                            <ul class="submenu">
                                <li><a href="games.php">Games</a></li>
                                <li><a href="web.php">Web</a></li>
                                <li><a href="capstone.php">Capstone</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!-- Header Div-->
	    </div>
	    
	    <div id="container">
	        <div id="content">