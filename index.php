<?php
//Added Failsafe for inDev
if (file_exists('../wp-blog-header.php')) {
define('WP_USE_THEMES', false);
require('../wp-blog-header.php');

}
 ?><!DOCTYPE html>
<html>
<head>

	<!-- Page Meta Shtuff -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Beggars Fair Youth Stage 2012 - Romsey Youth Council</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Keep the Search Engines Sweet -->
	<meta NAME="description" CONTENT="A free open gig in the heart of Romsey featuring local youth music acts."/>

	<!-- Facebook Open Graph -->
	<meta property="og:title" content="RYC: Beggars Fair Youth Stage 2012"/>
	<meta property="og:activity" content="band"/>
	<meta property="og:site_name" content="Romsey Youth Council Website"/>
	<meta property="og:description" content="A free open gig in the heart of Romsey featuring local youth music acts."/>
	<meta property="og:image" content="http://www.ryc.org.uk/wp-content/gallery/beggars-fair-youth-stage-2010/IMG_1224.JPG"/>
	<meta property="fb:admins" content="1089532097"/>

	<!-- Get Some Style! -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Exo:100' rel='stylesheet' type='text/css'>

	<!-- Some jQuery Shtuff -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1><a class="ryc" href="http://ryc.org.uk/">RYC</a> Beggars Fair Youth Stage 2012</h1>
			<h2 class="right date">Saturday 14th July</h2>
			<div class="clear"></div>
		</header>
		<div class="content">
			<!--<h2>Bands</h2>
			<p>Please assure your band meet the following <b>BEFORE</b> applying to play...<br/>
			
			<ul>
			<li>Your band members are under 21</li>
			<li>You can fill at least a half half hour set</li>
			<li>All band members are available for the whole day on Saturday 14th July</li>
			</ul>
			If you don't meet the above then drop us an email (contact@ryc.org.uk) and we'll reconsider.</p>
			<p><a href="https://docs.google.com/spreadsheet/viewform?formkey=dG9vdEVvSEI5ZGhfUndqUjZOU2ktSGc6MQ">Apply Here</a></p>
			-->
			<!--
			<form>
				<input type="text" name="BandName" placeholder="Band Name">
				<input type="text" name="PhoneNumber" placeholder="Phone Number">
				<input type="text" name="Email" placeholder="Email">
				<input type="submit">
			</form>
		-->
			<h2>Line Up</h2>
			
			<?php

			function BandSlot ($Time, $BandName, $BandDescription=null, $Links=null) {

				$BandLinksHTML = '';

				if($Links) {
					foreach ($Links as $LinkType => $Link) {
						$BandLinksHTML = $BandLinksHTML . '<a href="' . $Link . '">' . $LinkType . '</a> ';
					}
				}


				$HTML = <<<EOT

				<div class="timeslot">
					<div class="time">
						$Time
					</div>
					<div class="name">
						$BandName <a href="#" class="ToggleDescription">+</a>
					</div>
					<div class="description">
						$BandDescription
					</div>
					<div class="links">
						$BandLinksHTML
					</div>
				
				</div>

EOT;
				return $HTML;
			}
			echo BandSlot('12:00', 'The Roaring 20s',
					'The Roaring 20s are a new mod/ska band from Southampton we\'ve supported bands such as the beat on their sold out headline show! we have also headlined many shows ourselves and are creating a massive fan base, with great feedback. We would love to play beggars fair this year as its always great fun in romsey! ',
					array(
							'Facebook'=>'https://www.facebook.com/pages/The-Roaring-Twenties/324612107558977',
						)
				);
			echo BandSlot('12:30', 'Rock Choir',
					'No Description',
					array(
						)
				);
			echo BandSlot('13:00', 'Forever Under Fire',
					'An acoustic/indie duo formed 2 years ago influenced by the libertines, the arctic monkeys and the beatles. We played the youth stage last year and really enjoyed it.',
					array(
							'Facebook'=>'https://www.facebook.com/pages/Forever-Under-Fire/177384598952938',
						)
				);
			echo BandSlot('13:30', 'Mountbatten Big Band',
					'No Description',
					array(
							
						)
				);
			echo BandSlot('14:00', 'The Fringe',
					'Hi,we are a 3 piece rock band from Southampton writing our own material and gigging regular .after playing in the final of live and unsigned at the 02 London last year we have been very busy playing many festival and venues.',
					array(
						)
				);
			echo BandSlot('14:30', 'Trauma',
					'We are an alternative rock band that formed 2 years ago, recently taking on a new member. We have influences from Nirvana, Tool, NOFX and Primus. We would say that socks will be rocked off but let\'s hope this year it\'s Sandal weather, and sandals do not permit socks ;)',
					array(
							'Facebook'=>'http://www.facebook.com/pages/Trauma/124023624324902',
						)
				);
			echo BandSlot('15:00', 'The Harlequin',
					'we\'re a Indie-Pop band coming to surface at rapid pace',
					array(
							'Facebook'=>'www.facebook.com/harlequinsouthampton',
							'SoundCloud'=>'www.soundcloud.com/the-harlequin-1',
						)
				);
			echo BandSlot('15:30', 'Tom Martin',
					'Acoustic performance from lead singer of local band The Polychords. Influences ranging from Mumford and Sons to Oasis to Coldplay to Kasabian. All originals (maybe one cover if I\'m feeling boring) and hopefully a good chance to show that acoustic performances can be interesting!',
					array(
							'Facebook'=>'http://www.facebook.com/thepolychords',
							'Youtube'=>'http://www.youtube.com/user/ThePolychords',
						)
				);
			echo BandSlot('16:00', 'Flintlock',
					'Formed in late 2010, Flintlock play anything from blues and rock to funk and surf, influenced by the likes of Jimi Hendrix and ZZ Top. We played at Beggars Fair 2011... and be sure to watch out for the return of a certain Mandolin solo!',
					array(
							'Facebook'=>'http://www.facebook.com/pages/Flintlock/153193718076361',
						)
				);
			echo BandSlot('16:30', 'The 3rd League',
				'The 3rd League are a four piece indie/rock band based in Southampton that formed in mid-2009. Since then we have gigged all around the South playing busy headline shows. We have also supported some great acts such as Airship, Ten Second Epic and the Novatones',
					array(
							'Facebook'=>'http://www.facebook.com/the3rdleague',
							'Twitter'=>'http://twitter.com/the3rdleague',
						)
					);
			echo BandSlot('17:00', 'The Roaring 20s',
					'The Roaring 20s are a new mod/ska band from Southampton we\'ve supported bands such as the beat on their sold out headline show! we have also headlined many shows ourselves and are creating a massive fan base, with great feedback. ',
					array(
							'Facebook'=>'https://www.facebook.com/pages/The-Roaring-Twenties/324612107558977',
						)
				);
			echo BandSlot('17:30', 'Kate MacDonald',
					'A singer/songwriter with influences from Coldplay, Eliza Doolittle and The Kooks creating a fresh sound that\'s different and new. ',
					array(
							'Facebook'=>'http://www.facebook.com/pages/Kate-MacDonald/163016710404768',
						)
				);
			?>

			<h2>Sellers/Stalls</h2>
			<p>We have a "Mini Town" in the park too. If you are interested in having a stall, please get in touch.</p>

			<h2>Volunteering</h2>
			<p>This event is run by <a class="ryc" href="http://ryc.org.uk/">Romsey Youth Council</a>, we are a bunch of people under 18 that organise events and do all sort of other things.</p>
			<p>If your interested in joining RYC, helping with the organising and running of the Youth Stage or fancy lending a hand on the day, drop us an email ... <i>contact@ryc.org.uk</i></p>
		</div>
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRomYouCou&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=191508697542294" scrolling="no" frameborder="0" style="border:none; float:left;overflow:hidden; width:450px; height:40px;margin:10px;position:relative; top:10px;" allowTransparency="true"></iframe>

	</div>


<script type="text/javascript">

$('.timeslot .name .ToggleDescription').click(function(){
	$('.description').hide();
	$('.links').hide();
	$(this).parent().parent().children('.description').toggle();
	$(this).parent().parent().children('.links').toggle();
	return false;
});

</script>



<?php
//If is in Live Site then give Google Analytics Tracking.
if (file_exists('../wp-blog-header.php')) {

	// So long as the user isn't logged in give Tracking so that it doesn't track me basicly.
	if (! is_user_logged_in() ) { ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15765254-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php } } ?>

</body>
</html>