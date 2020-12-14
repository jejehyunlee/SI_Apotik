

<div class="limiter">
	<div class="container-login100" style="background-image: url('<?=base_url() ?>assets/login/images/bg-01.jpg');">
		<div class="wrap-login100 p-t-30 p-b-50">
			<span class="login100-form-title p-b-41">
				APOTIK 24 Jam
				
			</span>
			<!-- <div class="flash-data" data-flashdata= "<?=$this->session->flashdata('flash'); ?>"></div> -->
			<?php if($this->session->flashdata('flash')): ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					Username atau Password anda <?=$this->session->flashdata('flash')?> ..!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="<?=base_url('/Auth/cekmasuk');  ?>">

				<div class="wrap-input100 validate-input" data-validate = "Silahkan Masukan Username">
					<input class="input100" type="text" name="username" placeholder="User name" id="user">
					<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					
				</div>

				<div class="wrap-input100 validate-input" data-validate="Silahkan Masukan Password">
					<input class="input100" type="password" name="pass" placeholder="Password" id="pass">
					<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					
				</div>

				<div class="container-login100-form-btn m-t-32" >
					<button class="login100-form-btn" id="login" >
						Login
					</button>
				</div>

			</form>


			

		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>

