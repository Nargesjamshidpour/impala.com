<?php if (have_posts()):?>
	<?php while (have_posts()): the_post();?>
		<!-- Page Header Start -->
		<div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
			<h1 class="display-3 text-uppercase mb-3"><?php the_title();?></h1>
			<div class="d-inline-flex text-white">
				<h6 class="text-uppercase m-0"><a class="text-white" href="http://impala.com/">Home</a></h6>
				<h6 class="m-0 px-3">/</h6>
				<h6 class="text-uppercase m-0"><?php the_title();?></h6>
			</div>
		</div>
		<!-- Page Header Start -->
	<?php endwhile;?>
<?php endif;?>
