<?php get_header(); ?>

<!-- contenido -->
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>


<div class="container my-5">
	<div class="row">
		<div class="col-12 col-sm-6 col-md-4 mb-4">
			<div class="card">
				<img class="card-img-top img-fluid" src="./images/imagen-vacia.jpg" alt="Card image cap" />
				<div class="card-block">
					<a href="<?php the_permalink();?>"><h5 class="card-title mt-3"><?php the_title();?></h5></a>
					<p class="card-text">
						<?php the_excerpt();?>
					</p>
					<div class="card-footer">
						<small class="text-muted"><?php echo get_the_date()?>/ <?php the_category(',')?>/ <?php the_author()?> </small>
					</div>
				</div>
			</div>
		</div>

<?php	endwhile;
endif;
?>


		
	</div>
</div>

<!-- fin contenido -->

<?php get_footer();?>