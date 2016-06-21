<?php get_header(); ?>
<div class="row">
	<section>
		<nav id="destaques">
			<ul id="destaques ">
			<?php //O Código abaixo verifica o primeiro post para colocá-lo como destaque, e preenche os próximos 4 com thumbnail menor. ?>
			<?php $aux = 1; ?>
			<?php $query = new WP_Query( 'cat=1' ) ?>
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

				<?php if(!$paged && $aux == 1): ?>
					<div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
						<li><a href="">
						<figure class="destaque-principal">
							<?php the_post_thumbnail('destaque-maior');?>
						</figure>
							<h3 class="tag-box-destaque">Tag</h3>
							<h4 class="title-destaque"><?php the_title(); ?></h4>	
						</a></li>
					</div> <!-- col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 -->
					<div class="col-md-6 col-xs-12">
					<?php $aux++ ?>
				<?php else: ?>
					<?php if($aux % 2 == 0): ?>
						<div class="row">
							<div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
								<li>
									<a href=""><figure><?php the_post_thumbnail('destaque');?></figure>
									<h3 class="tag-box">Tag</h3>
									<h4 class="title-subdestaque"><?php the_title(); ?></h4>
									</a>
								</li>
							</div>	<!-- col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 -->		
					<?php else: ?>
						<?php if($aux == 3): ?>
							<div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
									<li>
										<img src="<?php echo get_template_directory_uri() . '/image/ad_destaques.png' ?>">
									</li>
							</div> <!-- col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 -->
							</div> <!-- row --> 
							<div class="row">
								<div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
									<li>
										<a href=""><figure><?php the_post_thumbnail('destaque');?></figure>
										<h3 class="tag-box">Tag</h3>
										<h4 class="title-subdestaque"><?php the_title(); ?></h4>
										</a>
									</li>
								</div> <!-- col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 -->
						<?php else: ?>
								<div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1">
									<li>
										<a href=""><figure><?php the_post_thumbnail('destaque');?></figure>
											<h3 class="tag-box">Tag</h3>
											<h4 class="title-subdestaque"><?php the_title(); ?></h4>
										</a>
									</li>
								</div> <!-- col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 -->
							</div> <!-- row -->
						<?php endif ?>
					<?php endif; ?>
					<?php $aux++ ?>
				<?php endif; ?>
			<?php if($aux > 5) break; ?>
			<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</nav>
	</section>
</div><!-- .row -->
<div class="row">
	<section>
		<nav>
			<ul id="subdestaque">
				<?php $query = new WP_Query( 'category_name=subdestaque' ) ?>
				<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
					<div class="col-md-3 col-sm-3 col-md-offset-0 col-xs-12 col-xs-offset-1">
						<li><a href="#"><?php the_post_thumbnail('subdestaque');?><h3 class="tag-box">Tag</h3>
								<h4><?php the_title(); ?></h4></a></li>
					</div> <!-- col-md-3 col-sm-3 col-md-offset-0 col-xs-12 col-xs-offset-1 -->
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>	
		</nav>
	</section>
</div> <!-- row -->
<?php get_footer(); ?>