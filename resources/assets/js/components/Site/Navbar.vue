<template>
    <header>
		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
						<li><a href="#">Contato</a></li>|
                        <li><a href="#">Email: ouvidoria.aapss@gmail.com</a></li>
					</ul>
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">
			<a class="logo" href="index.html">{{ titulo }}</a>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li class="drop-down"><a href="#">Sobre Nós<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="#">AAPSS</a></li>
						<li><a href="#">SINDAPS</a></li>
					</ul>
				</li>
				<li><a href="03_single-post.html">Notícias</a></li>
				<li><a href="04_FAQS.html">Financeiro</a></li>
				<li><a href="05_FAQS-single.html">Projetos</a></li>
				<li><a href="06_contact-us.html">Convênios</a></li>
                <slot></slot>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
</template>
<script>
export default {
    props:['titulo','url'],
    data: function() { 
        return {
            
        }
    }
}
</script>
<style>
    .logo{
        font-size: 22px;
        font-weight: bold;
    }
</style>