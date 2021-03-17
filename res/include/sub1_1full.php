<div class="section_div1">
	
</div>

<style>
.swiper-sub1 { width:100%; min-width:1200px; max-width:1919px; height:auto; position:relative; margin:0 auto; z-index:1; padding-top: 60px; }
.swiper-sub1 .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:650px; position:relative; margin:0 auto; }

.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }

.RightArea > img{ position:absolute; top:50%; transform:translateY(-50%); right:401px;}
.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:401px; }


</style>

<div class="swiper-container swiper-sub1" >
	 <div class="swiper-wrapper">
		<?for($i=1; $i<=4; $i++){?>
			<div style="background:url('/res/images/sub1_1/<?=$i?>.jpg') no-repeat;width:100%;background-position:center center;" class="swiper-slide" >
			
				<div class="RightArea"><img class="MainRight" src="/res/images/mainvisual/right.png" alt="메인비주얼 다음버튼"></div>
				<div class="LeftArea"><img class="MainLeft" src="/res/images/mainvisual/left.png" alt="메인비주얼 이전버튼"></div>
			</div>
		<?}?>
	</div>

	
	


</div>

<div class="subvisual_sub2">
	<img src="/res/images/subvisual/sub2.jpg" alt="강남참숯구이 오시는 길" />
</div>

<div class="subvisual_sub3">
		<!-- * 카카오맵 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1609291899372" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;"></div>

		<!--
			2. 설치 스크립트
			* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1609291899372",
				"key" : "23oxj",
				//"mapWidth" : "1919",
				"mapHeight" : "500"
			}).render();
		</script>
</div>

<script>

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-sub1', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: true,
						on:{
							transitionStart:function(){ },
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
						navigation: {
							nextEl: '.MainRight',
							prevEl: '.MainLeft',
						},
			});
		});
</script>