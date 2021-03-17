<style>
.swiper-mainvisual { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin:0 auto; z-index:1; }
.swiper-mainvisual .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin:0 auto; }

.RightArea { position:absolute; top:0; right:0; width:200px; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; width:200px; height:100%; z-index:2; }

.RightArea > img{ visibility:hidden; position:absolute; top:50%; transform:translateY(-50%); right:50px;}
.LeftArea > img { visibility:hidden; position:absolute; top:50%; transform:translateY(-50%); left:50px; }

.RightArea:hover > img {visibility: visible; }
.LeftArea:hover > img {visibility: visible; }

.MainCopy {background-color:#010101; position:absolute; margin:0 auto; height:160px; bottom:-160px; width:100%; transition:1s; z-index:2;}
.MainCopy.on {bottom:0;}
.MainCopy_up img{position:absolute; top:-80px;  z-index:2; transform:translateX(50%); right:50%; }
.MainCopy_tail {width:1100px; margin: 0 auto; color:#818181;}
.MainCopy_tail_1 { border-bottom:1px solid #818181; padding:22px 0;}
.MainCopy_tail_1 ul {display:flex; }
.MainCopy_tail_1 ul li {float:left; position:relative; padding:0 11px; }
.MainCopy_tail_1 ul li:first-child {padding-left:0;}
.MainCopy_tail_1 ul li:not(:first-child)::before { content:""; position:absolute; left:0; top:50%; transform:translateY(-50%); width:2px; height:2px; border-radius:100%; background:#818181; }
.MainCopy_tail_1 ul li a {color:#818181;}
.MainCopy_tail_1 ul li:last-child {color:#ed1c24;}

.MainCopy_tail_2 {display:flex; justify-content:space-between; margin-top:24px; color:#818181;}
.MainCopy_tail_2 div p {color:#818181; }



</style>

<div class="swiper-container swiper-mainvisual" >
	 <div class="swiper-wrapper">
		<?for($i=1; $i<=4; $i++){?>
			<div style="background:url('/res/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>

	
	<div class="RightArea"><img class="MainRight" src="/res/images/mainvisual/main_right.png" alt="메인비주얼 다음버튼"></div>
    <div class="LeftArea"><img class="MainLeft" src="/res/images/mainvisual/main_left.png" alt="메인비주얼 이전버튼"></div>

	<div class="MainCopy">
		<div class="MainCopy_up">
			<a href="#copybtn" onclick="CopyOpen();"><img src="/res/images/mainvisual/copyup.png" alt="메인카피 올리기 버튼" class="copyup"/></a>

		</div>
		<div class="MainCopy_tail">
			<div class="MainCopy_tail_1">
				<ul>
					<li><a href="">오시는 길</a></li>
					<li><a href="javascript:adm()">관리자 페이지</a></li>
					<li>예약문의 064)794-4555</li>
				</ul>
			</div>
			<div class="MainCopy_tail_2">
				<div>
					<p>
						강남 참숯구이<span class="bar">|</span>
						제주특별자치도 서귀포시 안덕면 서광동로 103<span class="bar">|</span>
						대표자:강남훈, 김선미<span class="bar">|</span>
						TEL:064)794-4555<span class="bar">|</span>
						사업자번호:616-26-87175
					</p>
					<span>Copyright &copy; 2020. <?=$g4['title']?>. All Right Reserved.</span>
				</div>
				<div>
					<a href="javascript:it9()"><img src="/res/images/mainvisual/itnine.png" alt="아이티나인 로고" /></a>
				</div>

			</div>

		</div>

	</div>
</div>


<script>

	function CopyOpen (){
		$(".MainCopy").addClass("on");
		$(".copyup").attr({"src":"/res/images/mainvisual/copydown.png"});
		$(".copyup").parent().attr({"onclick":"CopyClose()"});
	}
	function CopyClose (){
		$(".copyup").attr({"src":"/res/images/mainvisual/copyup.png"});
		$(".copyup").parent().attr({"onclick":"CopyOpen()"});
		$(".MainCopy").removeClass("on");
	}

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-mainvisual', {
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