<style>
.sub1_div1 {background:url('/m/images/subvisual/p1_1.jpg') no-repeat center top; height:1080px;}
.sub1_div2 {background:url('/m/images/subvisual/p1-2.jpg') no-repeat center top; height:370px;}

.swiper-mainvisual {margin:0 auto; width:590px; height:400px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

.swiper-pagination { width:100% !important; left:112px !important; top:21px !important; text-align:right; }
.swiper-pagination .swiper-pagination-bullet { width:32px !important; height:32px !important; background:none; opacity:1; border-radius:0px !important; box-sizing:border-box; border:1px solid #fff; color:#fff; line-height:28px; font-size:20px; text-align:center; outline:none; }
.swiper-pagination .swiper-pagination-bullet-active { background:#fff; border-radius:0px !important; opacity:1; color:#000; }


.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }

.RightArea > img{ position:absolute; top:50%; transform:translateY(-50%); right:0px;}
.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:0px; }

</style>


<div class="sub1_div1"></div>

<div class="swiper-mainvisual swiper-mainvisual-container2" >


	 <div class="swiper-wrapper">
		<?for($i=1; $i<=8; $i++){?>
			<div style="background:url('/m/images/subvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="RightArea"><img class="subRight" src="/m/images/subvisual/sub_right.png" alt="메인비주얼 다음버튼"></div>
				<div class="LeftArea"><img class="subLeft" src="/m/images/subvisual/sub_left.png" alt="메인비주얼 이전버튼"></div>
				&nbsp;
			</div>
		<?}?>
	</div>

</div>

<div class="sub1_div2"></div>

<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1609722189856" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1609722189856",
		"key" : "23qge",
		"mapWidth" : "640",
		"mapHeight" : "350"
	}).render();
</script>

<script>

	window.onload = function(){
	var swiper_mainvisual = null;

	$(function(){

		swiper_mainvisual = new Swiper('.swiper-mainvisual-container2', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:1,
						pagination: {
							el: '.swiper-pagination',
							type: 'bullets',
							bulletElement: 'span',
							clickable: 'false',
							renderBullet: function (index, className) {
								return '<span class="' + className + '">' + (index + 1) + '</span>';
							 },
						 },
						navigation: {
							nextEl: '.subRight',
							prevEl: '.subLeft',
						},
						
						
					});


		

	});
	}

</script>

