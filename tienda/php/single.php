<!--
###########################################################
#
#                    banner login
#
###########################################################
 -->
<div class="banner-top" style="background: url(images/back.jpg)no-repeat ;" >

	<div class="container">
		<h1>Productos</h1>
		<em></em>
		<h2><a href="index.php">Inicio</a><label>/</label>Productos</h2>
	</div>
</div>

<!--
###########################################################
#
#                    fin banner login
#
###########################################################
 -->

 <!--
###########################################################
#
#                    Contenido
#
###########################################################
 -->

<div class="single">
	<div class="container-fluid">
		<div class="col-md-9">
			<div class="col-md-5 grid">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="images/si.jpg">
							<div class="thumb-image"> <img src="images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/si1.jpg">
							<div class="thumb-image"> <img src="images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/si2.jpg">
							<div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-7 single-top-in">
<!--
###########################################################
#
#                    etiqueta Producto
#
###########################################################
 -->
				<div class="span_2_of_a1 simpleCart_shelfItem">
					<h3>titulo del producto</h3>
					<p class="in-para"> Subtitulo del producto.</p>
					<div class="price_single">
						<span class="reducedfrom item_price">$140.00</span>

						<div class="clearfix"></div>
					</div>

					<p class="quick_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam repudiandae, voluptatum nemo a cumque numquam modi optio, aliquid dolorem incidunt, ratione inventore quaerat veniam tempora atque explicabo similique nihil sapiente!
					</p>
					<div class="wish-list">
						<ul>
							<li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Agregar a Lista de Deseos</a></li>
							<li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Comparar</a></li>
						</ul>
					</div>
					<div class="quantity">
						<div class="quantity-select">
							<div class="entry value-minus">&nbsp;</div>
							<div class="entry value"><span>1</span></div>
							<div class="entry value-plus active">&nbsp;</div>
						</div>
					</div>
					<!--quantity-->
					<script>
					$('.value-plus').on('click', function(){
					var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
					divUpd.text(newVal);
					});
					$('.value-minus').on('click', function(){
					var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
					if(newVal>=1) divUpd.text(newVal);
					});
					</script>
					<!--quantity-->
					<a href="#" class="add-to item_add hvr-skew-backward">Añadir al carrito</a>
					<div class="clearfix"> </div>
				</div>
<!--
###########################################################
#
#                   Fin etiqueta Producto
#
###########################################################
 -->
			</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Descripcion:</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Informacion adicional</a></li>
						<li class=""><a href="#tab3" data-toggle="tab">Reviews</a></li>
					</ul>
				</nav>
				<div class="tab-content one">
						<!--
###########################################################
#
#                    Descripcion
#
###########################################################
 -->
					<div class="tab-pane active text-style" id="tab1">

						<div class="facts">
							<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nostrum aspernatur ducimus sequi animi? Quidem, asperiores, nobis? Animi eius veniam quisquam nisi, quas eveniet neque laborum, at similique obcaecati amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nostrum aspernatur ducimus sequi animi? Quidem, asperiores, nobis? Animi eius veniam quisquam nisi, quas eveniet neque laborum, at similique obcaecati amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nostrum aspernatur ducimus sequi animi? Quidem, asperiores, nobis? Animi eius veniam quisquam nisi, quas eveniet neque laborum, at similique obcaecati amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nostrum aspernatur ducimus sequi animi? Quidem, asperiores, nobis? Animi eius veniam quisquam nisi, quas eveniet neque laborum, at similique obcaecati amet</p>
							<ul>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								Aromaterapia</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>aceites</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Aromas</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Chackras</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Nivelacion de energias</li>

							</ul>
						</div>

					</div>
					<!--
###########################################################
#
#                   Fin Descripcion
#
###########################################################
 -->

 	<!--
###########################################################
#
#                    Informacion adicional
#
###########################################################
 -->
					<div class="tab-pane text-style" id="tab2">
						<div class="facts">
							<p > <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident ab cum tenetur! Facere expedita fuga obcaecati, veniam placeat dolorem enim sit deserunt labore a magnam hic. In eius, tempore corporis.</span>
							<span>Perferendis saepe facere, sequi culpa voluptas cum impedit beatae placeat nobis accusantium neque repellendus ab asperiores in obcaecati! Magnam unde inventore laboriosam provident reiciendis, necessitatibus blanditiis quae quibusdam dicta fugit.</span>
							<span>Velit natus quam fugiat placeat laudantium molestiae voluptate libero eos vel, ea voluptatibus debitis voluptatem nobis saepe, neque quas ratione, consectetur vitae quibusdam iste. Soluta perspiciatis omnis dicta voluptate voluptatem.</span>
							<span>Ab laboriosam soluta, et. Fugiat accusantium dolorem dolorum voluptatum repellat, architecto harum sed sapiente, iure expedita voluptate tempore ad provident! Culpa eligendi iure voluptatem error quas consequuntur sint quae commodi.</span>
							<span>Vitae illo minus, ut est nostrum! Blanditiis, soluta cupiditate iure libero perferendis illum rem mollitia eaque amet excepturi. A magnam molestiae nam quibusdam distinctio esse nulla cumque quos sint dolores!</span> </p>
							<ul >
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Multimedia Systems</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Digital media adapters</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Set top boxes for HDTV and IPTV Player  </li>
							</ul>
						</div>
					</div>

						<!--
###########################################################
#
#                    fin informacion adicional
#
###########################################################
 -->
 	<!--
###########################################################
#
#                    reviews
#
###########################################################
 -->
					<div class="tab-pane text-style" id="tab3">
						<div class="facts">
							<p > <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde eveniet ipsa officia animi fugiat amet assumenda, possimus aliquam, eius, repudiandae eaque suscipit perferendis sequi aperiam laborum nesciunt repellendus dignissimos voluptas.</span>
							<span>Consequuntur dignissimos vitae ut, harum accusamus soluta autem aspernatur! Nobis ut, ex totam quae similique asperiores dolorem, porro culpa quam numquam a quas at. Earum eum est fuga, accusamus officia!</span>
							<span>Veritatis illo quam error animi a vel, consectetur repellat vero ratione reprehenderit perferendis ipsa, nobis minima neque dolore voluptate corporis perspiciatis. Ullam molestiae omnis quis perferendis deleniti necessitatibus, minus earum.</span>
							<span>Modi recusandae corporis sequi debitis saepe qui delectus cupiditate consequuntur. Quia, ipsa, impedit. Commodi ipsam voluptas dolor sit. Eaque perspiciatis, nesciunt ut aperiam accusamus. Quaerat odit excepturi cupiditate placeat nisi.</span>
							<span>Possimus necessitatibus quam numquam corrupti libero, autem deleniti, amet magni quod quo natus, sunt, ipsam rerum laudantium? Odit rerum deleniti amet tempore numquam, repellat sapiente neque quod minus. Ipsam, sint!</span> </p>
							<ul>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
								<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
							</ul>
						</div>
					</div>
	<!--
###########################################################
#
#                    fin reviews
#
###########################################################
 -->
				</div>
				<div class="clearfix"></div>
			</div>
			<!---->
		</div>

		<div class="col-md-3 product-bottom product-at">
			<!--
###########################################################
#
#                    Categorias
#
###########################################################
 -->
			<div class=" rsidebar span_1_of_left">
				<h4 class="cate">Categorias</h4>
				<ul class="menu-drop">
					<li class="item1"><a href="#">Men </a>
					<ul class="cute">
						<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
						<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
						<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#">Women </a>
				<ul class="cute">
					<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
					<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
					<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
				</ul>
			</li>
			<li class="item3"><a href="#">Kids</a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="product.html">Automatic Fails</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Accessories</a>
		<ul class="cute">
			<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
			<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
			<li class="subitem3"><a href="product.html">Automatic Fails</a></li>
		</ul>
	</li>
	<li class="item4"><a href="#">Shoes</a>
	<ul class="cute">
		<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
		<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
		<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
	</ul>
</li>
</ul>
</div>
<!--
###########################################################
#
#                   fin Categorias
#
###########################################################
 -->
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	var menu_ul = $('.menu-drop > li > ul'),
	menu_a  = $('.menu-drop > li > a');
	menu_ul.hide();
	menu_a.click(function(e) {
	e.preventDefault();
	if(!$(this).hasClass('active')) {
	menu_a.removeClass('active');
	menu_ul.filter(':visible').slideUp('normal');
	$(this).addClass('active').next().stop(true,true).slideDown('normal');
	} else {
	$(this).removeClass('active');
	$(this).next().stop(true,true).slideUp('normal');
	}
	});
	});
</script>
<!--//menu-->



<!--
###########################################################
#
#                    tipo de producto
#
###########################################################
 -->

<section  class="sky-form">
<h4 class="cate">Producto:</h4>
<div class="row row1 scroll-pane">
<div class="col col-4">
	<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
</div>
<div class="col col-4">
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags  (30)</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Caps & Hats (30)</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jackets & Coats   (30)</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jeans  (30)</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shirts   (30)</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sunglasses  (30)</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Swimwear  (30)</label>
</div>
</div>
</section>

<!--
###########################################################
#
#                   fin tipo de producto
#
###########################################################
 -->

<!--
###########################################################
#
#                    Marcas
#
###########################################################
 -->

<section  class="sky-form">
<h4 class="cate">Marcas:</h4>
<div class="row row1 scroll-pane">
<div class="col col-4">
	<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
</div>
<div class="col col-4">
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Levis</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Persol</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Edwin</label>
	<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>New Balance</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Paul Smith</label>
	<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ray-Ban</label>
</div>
</div>
</section>

<!--
###########################################################
#
#                    Fin Marcas
#
###########################################################
 -->

</div>
<div class="clearfix"> </div>
</div>
<!--
###########################################################
#
#                    fin contenido
#
###########################################################
 -->