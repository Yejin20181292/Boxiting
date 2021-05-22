<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "기술,설비현황"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "설비현황"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

	
?>


	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>



	<section class="scontents">

		<div class="bg_vline"></div>
		<p class="eng">설비 현황</p>
		<p class="stitle">주요 시험설비와 생산설비에 대한 현황입니다.</p>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->

			<div id="pro_tab_1">
				<ul class="tab">
					<li class="all on"><a href="#proList1">시험 설비</a></li>
					<li class="all"><a href="#proList2">생산 설비</a></li>

				</ul>		

				<div id="proList1" class="active" style="clear:both;">
					<div class="pro_list">
						<div class="cross">
						<ul>
							<li class="wow fadeInLeft">
								<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_10.jpg"></div>
								<div class="cross_right">
									<h3 class="cross_tit">시험 설비</h3>
									<p class="cross_txt">
										이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
										이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
									</p>
								<!--<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product2"><span class="btn_go">제품바로가기</span></a>-->
								</div>
								<table class="tbl">
									<tbody>
										<tr>
											<th>방식</th>
											<td>전후진입형</td>
										</tr>					
										<tr>
											<th>펌프</th>
											<td>130 w</td>
										</tr>
										<tr>
											<th>구동모터</th>
											<td>220 V / 400 W</td>
										</tr>
										<tr>
											<th>탱크</th>
											<td>50 L</td>
										</tr>
										<tr>
											<th>정격 소비전력<br>(히타3Kw 제외시)</th>
											<td>1.6Kw</td>
										</tr>
										<tr>
											<th>제품규격(L x W x H)</th>
											<td>850 x 500 x 1,420</td>
										</tr>
										<tr>
											<th>사용전력</th>
											<td>단상 220 V / 60 Hz</td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
						</div>						
					</div>
				</div>
				<div id="proList2" style="clear:both;">
					<div class="pro_list">
						<div class="cross">
						<ul>
							<li class="wow fadeInLeft">
								<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_1.jpg"></div>
								<div class="cross_right">
									<h3 class="cross_tit">생산 설비</h3>
									<p class="cross_txt">
										이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
										이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
									</p>
								</div>
								<table class="tbl">
									<tbody>
										<tr>
											<th>방식</th>
											<td>전후진입형</td>
										</tr>					
										<tr>
											<th>펌프</th>
											<td>130 w</td>
										</tr>
										<tr>
											<th>구동모터</th>
											<td>220 V / 400 W</td>
										</tr>
										<tr>
											<th>탱크</th>
											<td>50 L</td>
										</tr>
										<tr>
											<th>정격 소비전력<br>(히타3Kw 제외시)</th>
											<td>1.6Kw</td>
										</tr>
										<tr>
											<th>제품규격(L x W x H)</th>
											<td>850 x 500 x 1,420</td>
										</tr>
										<tr>
											<th>사용전력</th>
											<td>단상 220 V / 60 Hz</td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
						</div>
					</div>
				</div>
		
			</div>
			<script>
				var tabMenu = function(item,active){
				  var $item = $(item);
				  active($item);
				}

				tabMenu('#pro_tab_1 .tab a',function(item,active){
				  item.on('click', function(e){
					var $parent = $(this).parent();
					var id = $(this).attr("href");
					if(!$parent.hasClass('on')){
					  $('#pro_tab_1 li').siblings('.on').removeClass('on');
					  $parent.addClass('on');					  				  
					  $('#pro_tab_1 > div').hide();
					  $(id).fadeIn();
					}
					return false;
				  });
				});
			</script>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->



	</section>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>