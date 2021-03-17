<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<?if(!defined("__INDEX")){?>
	<?if($bo_table){?>
	</div>
	<?}?>
	</section>
</section>
</div>
<?}?>

<? 
if(file_exists("{$g4[path]}/res/include/sub{$tott}full.php")) {
	include_once("$g4[path]/res/include/sub{$tott}full.php");
}else if(file_exists("{$g4[path]}/res/include/sub{$tot}full.php")) {
	include_once("$g4[path]/res/include/sub{$tot}full.php");
}else if(file_exists("{$g4[path]}/res/include/sub{$pageNum}full.php")) {
	include_once("$g4[path]/res/include/sub{$pageNum}full.php");
}?>

<div class="wrap-footer">
	<footer class="layout">
		<div class="position">
			<!--하단 영역-->
			<!--
			<div class="hidden">
				<dl>
					<dt></dt>
					<dd></dd>
					<dt></dt>
					<dd></dd>
					<dt></dt>
					<dd></dd>
				</dl>
			</div>
			-->

			<div class="tail_div1">
				<ul>
					<li><a href="">오시는 길</a></li>
					<li><a href="javascript:adm()">관리자 페이지</a></li>
					<li>예약문의 064)794-4555</li>
				</ul>

			</div>
			
			<div class="tail_div2">
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
		<div class="tail_top">
				<a href="#"><img src="/res/images/topbtn.jpg" alt="위로 올리기 버튼" /></a>
		</div>
	</footer>
</div>

<script>

	$(function(){
		Scroll();
	});

	$(window).scroll(function() {
		Scroll();
	});
	
	function Scroll(){
		if($(document).scrollTop() <= 1) {
			$(".tail_top").addClass("noneTop");
		}
		else {
			$(".tail_top").removeClass("noneTop");
		}
	}
	
</script>

</div>
<?
include_once("$g4[path]/tail.sub.php");
?>