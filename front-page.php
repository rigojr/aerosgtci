<?php get_header(); ?>

<div class="container-fluid bg-slider" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-slider.jpg);'">
	<div class="wrap-slider">
		<div class="containerS">
			<div class="mySlides item">
					<p class="first-call"><b>Make Your Money Work for You</b></p>
					<p class="second-call"><span>with a</span><b> SMART ETHEREUM MINING COMPUTER</b></p>
					<p class="third-call call-contact-btn right-call"><a class="btn btn-success" href="#">BOOK YOURS TODAY</a></p>
			</div>
			<div class="mySlides item">
					<p class="first-call"><b>Make Your Money Work for You</b></p>
					<p class="second-call"><span>with a</span><b> SMART ETHEREUM MINING COMPUTER</b></p>
					<p class="third-call call-contact-btn center-call"><a class="btn btn-success" href="#">BOOK YOURS TODAY</a></p>
			</div>
			<div class="mySlides item">
					<p class="first-call"><b>Make Your Money Work for You</b></p>
					<p class="second-call"><span>with a</span><b> SMART ETHEREUM MINING COMPUTER</b></p>
					<p class="third-call call-contact-btn left-call"><a class="btn btn-success" href="#">BOOK YOURS TODAY</a></p>
			</div>
		</div>
		<div style="text-align:center" class="pagination-slider">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>
</div>




<?php get_footer(); ?>