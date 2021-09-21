<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lab2b
 */

get_header();
?>

	<section class="banner-contato">
		<?php
			$img_desktop = get_field('banner_desktop');
			$img_mobile = get_field('banner_mobile');
		?>

		<picture>
			<source srcset="<?php echo $img_mobile['url']; ?>" media="(max-width: 768px)">
			<source srcset="<?php echo $img_desktop['url']; ?>">
			<img srcset="<?php echo $img_desktop['url']; ?>" alt="<?php echo $img_desktop['alt']; ?>">
		</picture>
	</section>
	<section class="form-contato">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="main-text-form">
						<h1>
							Contato
						</h1>							
					</div>
				</div>
			</div>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="44" title="Contact form 1"]' ); ?>
		
	</section>

	<section class="testimoniais">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<div class="title-testimonial">
						<h2>
							Depoimentos
						</h2>
					</div>
				</div>
				
				<div class="main-banner">

					<div>

						<div class="card-relative">

							<div class="card-testimonial">
								<div class="img-card">
									<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="">
								</div>
	
								<div class="text-card">
									<h2>
										Nonono nonono nono
									</h2>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio quae minus aliquam eos magnam praesentium hic quia? Deserunt reiciendis et laboriosam ipsum maiores velit, suscipit ad esse culpa rem in!
									</p>
								</div>
							</div>
						</div>
						
					</div>
				
					<div>

						<div class="card-relative">

							<div class="card-testimonial">
								<div class="img-card">
									<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="">
								</div>
	
								<div class="text-card">
									<h2>
										Nonono nonono nono
									</h2>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio quae minus aliquam eos magnam praesentium hic quia? Deserunt reiciendis et laboriosam ipsum maiores velit, suscipit ad esse culpa rem in!
									</p>
								</div>
							</div>
						</div>
						
					</div>

					<div>

						<div class="card-relative">

							<div class="card-testimonial">
								<div class="img-card">
									<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="">
								</div>
	
								<div class="text-card">
									<h2>
										Nonono nonono nono
									</h2>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio quae minus aliquam eos magnam praesentium hic quia? Deserunt reiciendis et laboriosam ipsum maiores velit, suscipit ad esse culpa rem in!
									</p>
								</div>
							</div>
						</div>
						
					</div>
					
					<div>

						<div class="card-relative">

							<div class="card-testimonial">
								<div class="img-card">
									<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="">
								</div>
	
								<div class="text-card">
									<h2>
										Nonono nonono nono
									</h2>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio quae minus aliquam eos magnam praesentium hic quia? Deserunt reiciendis et laboriosam ipsum maiores velit, suscipit ad esse culpa rem in!
									</p>
								</div>
							</div>
						</div>
						
					</div>

				
				
				
				
				</div>


			</div>
		</div>
	</section>

	<div class="white-space">
		
	</div>

<?php
get_footer();



