<?php include 'header.php' ?>

<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>
</div>

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
						<th>Ürünü Sil </th>

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
						<td><br><form><input type="text" class="form-control quantity" value="<?php echo $sepetcek['urun_adet'] ?>"></form></td>
						<td><br><?php echo $uruncek['urun_fiyat'] ?></td>
						<td><br><a ><span class="trash"></span></a></td>

						
					</tr>
					<?php } ?>


					

					</tbody>
				</table>
		</div>

		<div class="row col-md-4">
				
				<div >
					<div class="subtotal-wrap">
						<!--<div class="subtotal">
							<<p>Toplam Fiyat : $26.00</p>
							<p>Vat 17% : $54.00</p>
						</div>-->
						<div class="total">Toplam Fiyat : <span class="bigprice"><?php echo $toplam_fiyat/3 ?> TL</span></div>
						<br>

						<div class="keep"><a href="odeme.php" class="btn btn-yellow" width="373px">Ödeme Sayfası</a></div>
						<div class="keep"><a href="index.php" class="btn btn-yellow">Alışverişe devam et</a></div>
					</div>
				</div>
		</div>
		<div class="spacer"></div>
	</div>
</div>
	<?php include 'footer.php' ?>