<?php $this->load->view('yonetim/include/sidebar'); ?>
		<!-- MAIN -->
		<div class="main">
			
			<!-- NAVBAR -->
				<?php $this->load->view('yonetim/include/header'); ?>

			<!-- END NAVBAR -->
			
			<!-- MAIN CONTENT -->

			<div class="main-content">
				<div class="container-fluid">
							<div class="panel col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="panel-heading">
									<h3 class="panel-title">Slider Düzenle</h3>
								</div>
								<form action="admin-islem.php" method="POST" enctype="multipart/form-data">
									
									<div class="row">
										<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
											<!-- RECENT PURCHASES -->
											<div class="panel">
												<div class="form-group col-md-12">
													<img src="" style="height: 300px;width: 980px;" alt="Resim" title=""><br><!--Resim boyutu düzenlenecek-->			
												</div>
												<div class="form-group col-md-6">
													<h4>Slider Resmi Yükle</h4>
													<input name="resim" type="file"><!--resmin yolu güncellenirken çekilecek-->
													<br>									
												</div>
												<div class="form-group col-md-3 col-sm-12 col-xs-12">
													<input type="submit" value="Kaydet" class="btn btn-info col-md-12 col-sm-12 col-xs-12" name="btn-kullanici-duzenle">
													<br>									
												</div>
												<div class="form-group col-md-3 col-sm-12 col-xs-12">
													<input type="submit" value="Slider resmini sil" class="btn btn-danger col-md-12 col-sm-12 col-xs-12" name="">
													<br>									
												</div>
												
											</div>
											<!-- END RECENT PURCHASES -->
										</div>
									</div>
								</form>
							</div>
							<!-- END INPUTS -->
						</div>
					</div>
				</div>
			<!-- END MAIN CONTENT -->

	<!-- Javascript -->
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/klorofil.min.js"></script>
