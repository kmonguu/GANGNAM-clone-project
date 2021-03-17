<style>
.swiper-mainvisual {margin:0 auto; padding-top:110px; width:590px; height:400px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

.swiper-pagination { width:100% !important; left:112px !important; top:21px !important; text-align:right; }
.swiper-pagination .swiper-pagination-bullet { width:32px !important; height:32px !important; background:none; opacity:1; border-radius:0px !important; box-sizing:border-box; border:1px solid #fff; color:#fff; line-height:28px; font-size:20px; text-align:center; outline:none; }
.swiper-pagination .swiper-pagination-bullet-active { background:#fff; border-radius:0px !important; opacity:1; color:#000; }


.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }

.RightArea > img{ position:absolute; top:50%; transform:translateY(-50%); right:0px;}
.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:0px; }
.sub3_div1 {background:url('/m/images/subvisual/sub3_1/p3_1.jpg') no-repeat center top; height:2400px; margin-top:50px;}
</style>


<div class="swiper-mainvisual swiper-mainvisual-container3" >


	 <div class="swiper-wrapper">
		<?for($i=1; $i<=8; $i++){?>
			<div style="background:url('/m/images/subvisual/sub3_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="RightArea"><img class="subRight" src="/m/images/subvisual/sub_right.png" alt="메인비주얼 다음버튼"></div>
				<div class="LeftArea"><img class="subLeft" src="/m/images/subvisual/sub_left.png" alt="메인비주얼 이전버튼"></div>
				&nbsp;
			</div>
		<?}?>
	</div>

</div>

<div class="sub3_div1"></div>


<script>

	window.onload = function(){
	var swiper_mainvisual = null;

	$(function(){

		swiper_mainvisual = new Swiper('.swiper-mainvisual-container3', {
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

