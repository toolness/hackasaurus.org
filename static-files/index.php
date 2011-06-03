<?php include_once("include/module/head.php")?>

<?php include_once("include/module/header.php")?>

<section role="main" class="home">

	<!-- Examples Slideshow -->
	<div class="examples">
		<h2>Remix, make and share</h2>
		<p>Hackasaurus makes it easy to remix and change any web page like magic. Or create your own.</p>
		<div class="slideshow-gallery">
			<div class="slideshow">
				<div class="slides">
					<ul>
						<li><img src="include/image/slides/9.jpg" alt="" /></li>
						<li><img src="include/image/slides/8.jpg" alt="" /></li>
						<li><img src="include/image/slides/2.jpg" alt="" /></li>
						<li><img src="include/image/slides/7.jpg" alt="" /></li>
						<li><img src="include/image/slides/3.jpg" alt="" /></li>
						<li><img src="include/image/slides/1.jpg" alt="" /></li>
						<li><img src="include/image/slides/4.jpg" alt="" /></li>
						<li><img src="include/image/slides/6.jpg" alt="" /></li>
						<li><img src="include/image/slides/5.jpg" alt="" /></li>
					</ul>
					<div class="loader">
						<img src="include/image/loader.gif" alt="loader"/>
					</div>
				</div>
				<p id="next">Next</p>
				<p id="prev">Prev</p>
			</div>
		</div>
	</div>
	<!-- End Examples Slideshow -->

	<!-- Goggles Teaser -->
	<div class="get-started">
		<h2>Get started</h2>
		<p>Activate the <a href="goggles.php">X-Ray Goggles</a> to see inside the web - and use your superpowers to change it!</p>
		<img src="include/image/supergirl.png" alt="supergirl" width="300" height="330" />
	</div>
	<!-- End Goggles Teaser -->

	<!-- Events Listing -->
	<?php include_once("include/module/events.php")?>
	<!-- End Events Listing -->

</section>

<!-- Javascript for slideshow -->
<script type="text/javascript" src="include/script/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slides ul').cycle({
		fx: 'fade',
		pause: 0,
		prev: '#prev',
		speed: 600,
		next: '#next'
	});
});
</script>

<?php include_once("include/module/footer.php")?>