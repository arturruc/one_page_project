<?php
    // Template Name: One page szablon
   
?> 
    <?php get_header(); ?>
 



<div class="carousel">
				<img class="carousel-slide" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/zdjeciecocolo.webp" 
				alt="">
				<div class="carousel-description">
					<h2>
                    <?php the_title(); ?>
                    </h2>
                    <p>
                    <?php the_content(); ?>
                    </p>
					<button class="cta" onclick="mojaFunkcja();">Shop now</button>
                    <div id="mojeid"></div>	

                    <div id="mojeid1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nisi, corporis odit aliquid aliquam reiciendis consequuntur eius iste! Obcaecati repellendus corporis quas atque incidunt, perferendis exercitationem error earum veritatis vel.
                        Nostrum corporis, quaerat assumenda recusandae maiores vero inventore. Asperiores nesciunt soluta ex blanditiis sunt accusamus, facere voluptate, consectetur optio fuga delectus adipisci dicta quos doloremque, fugiat impedit sit esse! Laborum.
                        Numquam, dolorum. Doloribus vitae, temporibus tempore enim maiores aliquam culpa eligendi nulla expedita obcaecati iure consectetur? Suscipit reiciendis deleniti temporibus ratione adipisci similique vel, accusamus velit repellendus perspiciatis quibusdam amet!
                        Placeat eos et, sed cupiditate recusandae magnam voluptates doloremque ipsa iure. Reprehenderit natus cum sequi temporibus ea repudiandae a labore, assumenda eum omnis. Illo non pariatur delectus qui quo dolores!
                        Libero, beatae rem, aperiam ducimus quaerat necessitatibus sunt mollitia consectetur accusantium alias, repellendus illo! Praesentium pariatur doloremque dolorum molestiae, beatae aliquam sit sequi, debitis ipsa atque odit nemo asperiores quaerat!

                    </div>
                    <div id="mojeid2"></div>
                    <button onclick="obiekty();">Sprawdz wartosc w polu</button>
                    <!-- <label for="">Wpisz liczbe pomiedzy 100 a 500</label>
                    <input type="number" id="pole1" min="100" max="500" required> -->
                    <!-- <button onclick="walidacja();">Sprawdz wartosc w polu</button> -->
                    <div id="info"></div>
                    <!-- <button onclick="alamakota();">Wypisz koty</button> -->
				</div>
		</div>

	<div id="content" class="site-content">

			<div class="introduction">
				<h2>Featured Colletion</h2>
				<p>A powerful headline about your product’s features to give focus to your chosen product collection</p>
			</div>

<!-- ul.block-grid>li*3>a>div>img+p+span+button.add-to-cart -->

		<ul class="block-grid">
			<li class="block-grid__product-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/butelka1.webp" alt="">
						<p>Eternal Sunset Collection Lip and Cheek</p>
						<span class="price">$12.00</span>
						<button class="add-to-cart cta1">Add to Cart</button>
					</div>
				</a>
			</li>
			<li class="block-grid__product-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/butelka2.webp" alt="">
						<p>Vinopure Pore Purrifying Gel Cleanser</p>
						<span class="price">$14.00</span>
						<button class="add-to-cart cta1">Add to Cart</button>
					</div>
				</a>
			</li>
			<li class="block-grid__product-item">
				<a href="">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/butleka3.webp" alt="">
						<p>Deep Sweep 2% BHA Pore Cleaning Toner</p>
						<span class="price">$21.00</span>
						<button class="add-to-cart cta1">Add to Cart</button>
					</div>
				</a>
			</li>
		</ul>

		<!-- zdjecie glowne nizej-->

		<div class="carousel1">
				<img class="carousel1-slide" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/zdjecie2.webp" 
				alt="">
				<div class="carousel1-description">
					<h2>Highlighted Section <br></h2>
					<p>What differentiates you from the competition? Use this section to talk about it. Don’t forget to talk about the benefits.</p>
					<button class="cta">Shop now</button>	
				</div>
		</div>

<!-- zdjecia 4 w rzedzie  -->
		<!-- ul.featured-categories>li.category-item*4>1>div>img.category-img+p.category-title -->

		<ul class="featured-categories">
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/photo1.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div> 
			
			
		</a>
	</li>
	
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/photo2.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div>
		</a>
	</li>
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/photo3.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div>
		</a>
	</li>
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/photo4.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div>
		</a>
	</li>
</ul>

		<!-- stopka -->
		<footer class="container-bottom">
			<div class="text-container">
				<div class="">
					<h2 class="space-between text2">BOTIGA</h2>
					<p>Give your customers insight into your product collection.</p>
				</div>
				<div class="text1">
					<h2 class="space-between">Quick links</h2>
					<p>Home</p>
					<p>Blog</p>
					<p>Shop</p>
				</div>
				<div class="text1">
					<h2 class="space-between">About</h2>
					<p>Shipping</p>
					<p>Terms</p>
					<p>Policy</p>
				</div>

			</div>
            <?php get_footer(); ?>

			
		

