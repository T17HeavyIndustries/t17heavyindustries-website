<?php
require "../includes/noCache.inc";
?>

<html>

	<head>

		<title>T-17 Heavy Industries - Games</title>
    	<meta name="description" content="Information about games developed by T-17 Heavy Industries.">

    	<?php require "../includes/headerImbedded.inc" ?>

    	<link rel="stylesheet" type="text/css" href="../slick/slick.css"/>

	</head>

	<body>

		<?php require "../includes/topBannerImbedded.inc" ?>

		<div class="main">

		<h2 style="text-align:center;font-family:Roboto;">Releases</h2>

		<div class = "game_entry" id="back_game_entry2">
	        <h3 style="text-align:left;font-family:Roboto;"> Back and Forth </h3>
	        <hr>
		       <div id="cf">
	        		<img src="../images/baf2.png" class="bottom">
	        		<img src="../images/baf1.png" class="top">
	    		</div>
 

        <div class = "game_text">
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;Back and Forth is a puzzle game made for Android devices.
          	Control two blocks with mirrored movement while switching between four themed worlds to solve puzzles.  



          </p>
          <p style="font-family:Roboto">
          		<b>Featuring</b>: <br>
          	• 50 Hand crafted puzzles to solve <br>
			• 4 Unique environments <br>
			• 2 Areas to control at once<br>
			• Fastest time high scores to compete against<br>
			• Easy to use level editor that can create millions of new puzzles! <br>
			• Save puzzles made in the level editor to play anytime<br>
          </p>
        </div>
        <div class = "game_link_box">
          <a class = "game_link" href="https://play.google.com/store/apps/developer?id=T-17+Heavy+Industries">Play Store</a>
        </div>
      </div>

		<h2 style="text-align:center;font-family:Roboto;">Game Jams</h2>

		<div class = "game_entry" id="feel_game_entry">
        <h3 style="text-align:left;font-family:Roboto;"> Feelin N Dealin </h3>
        <hr>
        <img src="../images/feel.jpg" class="game_picture" id="feel_game_picture">
        <div class = "game_text">
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;Feelin N Dealin was our first game jam submission and was made for Ludum Dare 29 in 72 hours.
          </p>
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;You play as a middle aged man who makes his home in the sewers. The police lock down the streets while
            rats, garbage dwelling homeless, and the occasional stray alligator haunt your paths through the underground.
            Your friend "The Dealer" sells you items to help you survive and has you deliver "product" to the wealthy kiddies
            up top to turn a profit. If you can make it to the sale without dying or getting locked in the slammer along the way;
            take your capital gains over to the thrift store for everything necessary to "pimp yo crib."
          </p>
        </div>
        <div class = "game_link_box">
          <a class = "game_link" href="feelin_and_dealin.html">Web</a>
        </div>
      </div>

      <div class = "game_entry" id="wheel_game_entry">
        <h3 style="text-align:left;font-family:Roboto;"> Wheelin N Stealin </h3>
        <hr>
        <img src="../images/screenshot_3.png" class="game_picture" id="wheel_game_picture">
        <div class = "game_text">
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;Wheelin N Stealin was originally made for the Gamejolt GameBoy Jam 3, a ten day game jam, but we are continuing to work
            on it. You can currently play the game in its original game jam form.
          </p>
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;Once again Uncle Craig is trying to pimp his crib the only way he knows how, by delivering drugs to the rich kids.
             Watch out for the ever patrolling cops and don’t forget to supplement your pocket money by robbing your local honest retailers. If you feel the man is onto you,
             deposit you money at a nearby ATM for safe keeping. The shady drug dealers are always there for you with new clients so work hard to get yourself the most rockin pad in
             existence.
          </p>
        </div>
        <div class = "game_link_box">
          <a class = "game_link" href="wheelin_n_stealin.html">Web</a>
        </div>
      </div>

      <div class = "game_entry" id="back_game_entry">
        <h3 style="text-align:left;font-family:Roboto;"> Back and 4th </h3>
        <hr>
        <img src="../images/1.png" class="game_picture">
        <div class = "game_text">
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;Back and 4th was our third game jam submission and was made for Ludum Dare 30.
             It was created in 72 hours, and placed 64th out of 1045 entries.</p>
          <p style="font-family:Roboto">&nbsp;&nbsp;&nbsp;&nbsp;After Ludum Dare 30, we continued working on this project and turned it into Back and Forth which we recently released
          	for Android. The release version is a heavy improvement with improved graphics, redone UI, thirty more puzzles, high scores, new game mechanics, and a level editor.  Click the link below to view the Ludum Dare version.
          </p>
        </div>
        <div class = "game_link_box">
          <a class = "game_link" href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=34809">LudumDare</a>
        </div>
      </div>

    </div>

	</body>

</html>

<?php
ob_end_flush();
?>