<?php include'header.php' ?>

<div class="container">
	<div class="row">
		<div class=""><!--Main content-->
			
			<div class="row">
				<div class="col-md-6">
					<div class="dt-img">
						<a ><img src="images/telefon/iphone-13.png" alt="" class="img-responsive"></a>
					</div>
					<!-- <div class="thumb-img">
						<a class="fancybox" href="images\sample-4.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/telefon/iphone13pro-yesil.png" alt="" class="img-responsive"></a>
					</div>
					<div class="thumb-img">
						<a class="fancybox" href="images\sample-5.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/telefon/iphone-13.png" alt="" class="img-responsive"></a>
					</div>
					<div class="thumb-img">
						<a class="fancybox" href="images\sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/telefon/iphone-13.png" alt="" class="img-responsive"></a>
					</div> -->
				</div>
				<div class="col-md-6 det-desc">
					<div class="productdata"><br><br>
						<div class="infospan"><span class="title">Apple Iphone 13 128gb Mavi</span></div><br><br>
						<div class="infospan">Marka : <span>APPLE</span></div><br>
						<div class="infospan">Hafıza : <span>128gb</span></div><br>
						<div class="infospan">Renk : <span>Mavi</span></div><br><br>

						<div class="average">
							<form role="form">
								<!--<div class="form-group">
									 <div class="rate"><span class="lbl">Average Rating</span>
									</div> 
									<div class="starwrap">
										<div id="score"></div>
									</div>
									<div class="clearfix"></div>
								</div>-->
							</form>	
						</div>
					</div>
					<br><br>
				<!--		<h4>Seçenekler</h4>

						<form class="form-horizontal ava" role="form">
							<div class="form-group">
								<label for="mem" class="col-sm-2 control-label">Hafıza</label>
								<div class="col-sm-10">
									<select class="form-control" id="mem">
										<option><a href="">128gb</a>	
										<option><a href="telefon.php">256gb</a>
										<option><a href="">512gb</a>
										<option><a href="">1TB</a>
									</select>
								</div>
													 <div class="clearfix"></div>
													<div class="dash"></div>
							</div> -->


						<!-- 		<div class="form-group">
													<label for="color" class="col-sm-2 control-label">Renk</label>
													<div class="col-sm-10">
														<select class="form-control" id="color">
															<option>Mavi
															<option>Yeşil
															<option>Sierra Mavi
															<option>Kırmızı
															<option>Gold
														</select>
													</div>
																	<div class="clearfix"></div>
																	<div class="dash"></div>
								</div>
 -->
								<!-- <div class="form-group">
																	<label for="qty" class="col-sm-2 control-label">Qty</label>
																	<div class="col-sm-5">
																		<select class="form-control" id="qty">
																			<option>1
																			<option>2
																			<option>3
																			<option>4
																			<option>5
																		</select>
																	</div>
								</div> </form>-->


										<span class="title">22.499,00</span>
										<div class="spacer"></div>
								<form action="nedmin/netting/islem.php" method="POST">

									<div class="form-group">

										<label for="qty" class="col-sm-2 control-label">Adet</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" value="1" name="urun_adet">
										</div>
										<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

										<input type="hidden" name="urun_id" value="2">
										<div class="col-sm-4">
											<button  type="submit" name="sepetekle" class="btn btn-default btn-red btn-sm"><span class="addchart">Sepete Ekle</span></button>
										</div>
										<div class="clearfix"></div>
									</div>
												<!-- 	<div class="clearfix"></div> -->
								</form>
						

							<!--<div class="sharing">
																					 <div class="share-bt">
																						<div class="addthis_toolbox addthis_default_style ">
																							<a class="addthis_counter addthis_pill_style"></a>
																						</div>
																						<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f0d0827271d1c3b"></script>
																						<div class="clearfix"></div>
																					</div> 
																					<div class="avatock"><span>In stock</span></div>
							</div>-->
				</div>
				
		</div>
	</div>	
	<div class="tab-review">
																					<ul id="myTab" class="nav nav-tabs shop-tab">
																						<li class="active"><a href="#desc" data-toggle="tab">Açıklama</a></li><!-- 
																						<li class=""><a href="#rev" data-toggle="tab">Reviews (0)</a></li> -->
																					</ul>
																					<div id="myTabContent" class="tab-content shop-tab-ct">
																						<div class="tab-pane fade active in" id="desc">
																							<p>
																								Süper parlak bir ekran ve dayanıklı tasarım. Filmleri aratmayan, kolay video çekimleri. Işık hızında bir çip. Ve hayatınızda fark yaratan çok daha uzun pil ömrü.
																							</p>
																						</div>
																						<!-- <div class="tab-pane fade" id="rev">
																							<p class="dash">
																								<span>Jhon Doe</span> (11/25/2012)<br><br>
																								Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
																							</p>
																							<h4>Write Review</h4>
																							<form role="form">
																								<div class="form-group">
																									<input type="text" class="form-control" id="name">
																								</div>
																								<div class="form-group">
																									<textarea class="form-control" id="text"></textarea>
																								</div>
																								<div class="form-group">
																									<div class="rate"><span>Rating:</span></div>
																									<div class="starwrap">
																										<div id="default"></div>
																									</div>
																									<div class="clearfix"></div>
																								</div>
																								<button type="submit" class="btn btn-default btn-red btn-sm">Submit</button>
																							</form>

																						</div> -->
																					</div>
							</div>
			</div>
</div>

<?php include'footer.php' ?>