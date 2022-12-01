<?php get_header(); ?>
<?php View::render('products/single/single-title');?>
<?php View::render('products/single/single-content');?>
	<div class="portfolio-item first" style="width: 400px;height: 400px;">
		<div class="position-relative rounded overflow-hidden mb-2">
			<img class="img-fluid w-100" src="<?php echo Asset::image('portfolio-1.jpg');?>" alt="">
			<a style="text-align: center; align-content: center">
				<p style="font-size: 30px;color: black">قیمت : <?php echo product::price(get_the_ID())?></p>
				<p style="font-size: 30px;color: black;"><?php echo get_the_content();?></p>
			</a>
		</div>
	</div>
<?php get_footer(); ?>