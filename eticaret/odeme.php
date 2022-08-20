<?php include 'header.php' ?>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	<div>
		<div class="title-bg col-md-8">
			<div class="title">Alışveriş Sepetim</div>
		</div>
		<div class="title-bg col-md-4">
			<div class="title">Sipariş Özeti</div>
		</div>

		<div class="table-responsive col-md-8">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Ürün Resim</th>
						<th>Ürün Ad</th>
						<th>Ürün Renk</th>
						<th>Adet</th>
						<th>Ürün Fiyat</th>

					</tr>
				</thead>
				<tbody>
					
					<?php 
					$kullanici_id=$kullanicicek['kullanici_id'];
					$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
					$sepetsor->execute(array(
						'id' => $kullanici_id
					));

					while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

						$urun_id=$sepetcek['urun_id'];
						$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
						$urunsor->execute(array(
							'urun_id' => $urun_id
						));

						$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
						$toplam_fiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
						?>

						<tr>
							<td><img src="<?php echo $uruncek['urun_resim'] ?>" width="80" alt=""></td>
							<td><br><?php echo $uruncek['urun_ad'] ?></td>
							<td><br><?php echo $uruncek['urun_renk'] ?></td>
							<td><br><form><?php echo $sepetcek['urun_adet'] ?></form></td>

							<td><br><?php echo $uruncek['urun_fiyat'] ?></td>


						</tr>
					<?php } ?>


					

				</tbody>
			</table>
		</div>

		<div class="row col-md-4">

			<div>
				<div class="subtotal-wrap">
					<div class="total">Toplam Fiyat : <span class="bigprice"><?php echo $toplam_fiyat/3 ?> TL</span></div>
					<br><br>
					
				</div>
			</div>
		</div>
	</div>
	<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li class="active"><a href="#desc" data-toggle="tab">Havale/EFT</a></li>
						<li class=""><a href="#rev" data-toggle="tab">Kredi Kartı</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade active in" id="desc">
							<ul class="col-md-8">
								<li>GARANTİ BANKASI: TR 1234 1234 1234 1234</li><br>
								<li>T.C İŞ BANKASI: TR 1234 1234 1234 1234</li><br>
								<li>T.C ZİRAAT BANKASI: TR 1234 1234 1234 1234</li>
							</ul>
							<a href="siparis-onay.php" ><button type="submit" class="btn btn-yellow col-md-4">Siparişi Onayla</button></a>
						</div>
						<div class="tab-pane fade" id="rev">
							
						<!--		 <form role="form"></form> -->
								<!-- <div class="info col-md-3">
									<div class="form-group ">
										<input type="text" disabled="" placeholder="Ad Soyad" class="form-control" id="name">
									</div>

									<div class="form-group">
										<input type="text" disabled="" placeholder="Kart Numarası" class="form-control" id="name">
									</div>
									
								</div>
								<div class="info col-md-3">
									<div class="form-group ">
										<input type="text" required="required" class="form-control" id="name">
									</div>
									
									<div class="form-group">
										<input type="text" required="required" class="form-control" id="name">
									</div>
									
								</div>
								<div class="info col-md-4">
									
									<div class="cvc">
										<div class="form-group col-md-6">
											<input type="text" disabled="" placeholder="Son Kullanma Tarihi" class="form-control " id="name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control " id="name">
										</div>
									</div>
									<div class="cvc">
										<div class="form-group col-md-6">
											<input type="text" disabled="" placeholder="CVC" class="form-control " id="name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control " id="name">
										</div>
									</div>
								</div>-->
								
								<form name="example_ form" >
									<div class="kredi">
									Ad Soyad: <input type="text" size="30" maxlength="30" /><br /><br />
									Kart Numarası: <input type="text" size="30" maxlength="16" /><br /><br />
									Son Kullanma Tarihi: <input type="text" size="10" maxlength="5" /><br /><br />
									CVC: <input type="text" size="10" maxlength="3" /><br /><br /><!-- 
									<a href="siparis-onay.php"><button type="submit" class="btn btn-red">Siparişi Onayla</button></a>  -->
									<!-- <a href="siparis-onay.php"></a> -->
									</div>
								</form>
								<a href="siparis-onay.php"><button type="submit" class="btn btn-red">Siparişi Onayla</button></a> 
							
							
						</div>
							
				
					</div>
	</div>
	

</div>
	<?php include 'footer.php' ?>