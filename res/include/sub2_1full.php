<div class="sub2_div1"> 
	<img src="/res/images/sub2_1/mainmenu.jpg" alt="메인메뉴" />
</div>

<style>
.sub2_div1 { text-align:center; }
.swiper-sub2 { width:100%; min-width:1200px; max-width:1919px; height:auto; position:relative; margin:0 auto; z-index:1; }
.swiper-sub2 .swiper-slide { width:100%; min-width:1200px; max-width:1919px;height:1000px; position:relative; margin:0 auto; }

.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }

.RightArea > img{ position:absolute; top:50%; transform:translateY(-50%); right:1540px;}
.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:40px; }

.sub2_div2 { background: url('/res/images/sub2_1/menu.jpg') no-repeat center top; height: 1156px; }
</style>

<div class="swiper-container swiper-sub2" >
	 <div class="swiper-wrapper">
		<?for($i=1; $i<=3; $i++){?>
			<div style="background:url('/res/images/sub2_1/<?=$i?>.jpg') no-repeat;width:100%;background-position:center center;" class="swiper-slide" >
			
				<div class="RightArea"><img class="subRight" src="/res/images/mainvisual/right.png" alt="메인비주얼 다음버튼"></div>
				<div class="LeftArea"><img class="subLeft" src="/res/images/mainvisual/left.png" alt="메인비주얼 이전버튼"></div>
			</div>
		<?}?>
	</div>
</div>
<div class="sub2_div2">
	
</div>
<script>

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-sub2', {
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
							nextEl: '.subRight',
							prevEl: '.subLeft',
						},
			});
		});
</script>