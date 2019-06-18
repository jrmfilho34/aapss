<template>
	<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-10 bg-grad-layer-6">
							<img :src="slide[0].imagen" alt="">
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b>{{ slide[0].descricao }}</b></h3>
							<ul class="list-li-mr-20">
								<li><a href="#" class="btn btn-dark btn-sm">Ler mais</a></li>
								<li>Por: <span class="color-primary"><b>{{ slide[0].autor }} </b></span> {{ slide[0].data }}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div class="img-bg bg-2 bg-grad-layer-6">
								<img :src="slide[1].imagen" alt="">
							</div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>{{ slide[1].descricao }}</b></h4>
								<ul class="list-li-mr-20">
									<li><a href="#" class="btn btn-dark btn-sm">Ler mais</a></li>
									<li>{{ slide[1].data }}</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div class="img-bg bg-3 bg-grad-layer-6">
								<img :src="slide[2].imagen" alt="">
							</div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>{{ slide[2].descricao }}</b></h4>
								<ul class="list-li-mr-20">
									<li><a href="#" class="btn btn-dark btn-sm">Ler mais</a></li>
									<li>{{ slide[2].data }}</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
		
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-4 bg-grad-layer-6">
							<img :src="slide[3].imagen" alt="">
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>{{ slide[3].descricao }}</b></h4>
							<ul class="list-li-mr-20">
								<li><a href="#" class="btn btn-dark btn-sm">Ler mais</a></li>
								<li>{{ slide[3].data }}</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-5 bg-grad-layer-6">
							<img :src="slide[4].imagen" alt="">
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>{{slide[4].descricao}}</b></h4>
							<ul class="list-li-mr-20">
								<li><a href="#" class="btn btn-dark btn-sm">Ler mais</a></li>
								<li>{{ slide[4].data }}</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-6 bg-grad-layer-6">
							<img :src="slide[5].imagen" alt="">
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>{{ slide[5].descricao}}</b></h4>
							<ul class="list-li-mr-20">
								<li><a href="#" class="btn btn-dark btn-sm">Ler mais</a></li>
								<li>{{ slide[5].data}}</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
</template>
<script>
export default {
    props:['titulo','descricao','data','url'],
    data: function() { 
        return {
             slide:''
        }
	},
	mounted(){
		axios.get(this.url).then(resp=>{
			console.log(resp.data)
			this.slide = resp.data
			console.log(this.slide.titulo)
		})      
    }
}
</script>