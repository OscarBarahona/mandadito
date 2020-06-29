<div id="wrapper">
		<div class="padding-md" style="margin-top:50px;">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
					<div class="h5">Oops, La pagina que esta intentando ver no se encuentra!</div>
					<h1 class="m-top-none error-heading"><?php echo $code; ?></h1>
					
					<h4>Favor revisa desde donde quieres entrar</h4>
					<div><?php echo CHtml::encode($message); ?></div>
					<div class="m-bottom-md">Try searching for the page here</div>
					<a class="btn btn-success m-bottom-sm" href="<?php echo CController::createUrl('site/index'); ?>"><i class="fa fa-home"></i> Regresar al Inicio</a>
					<a class="btn btn-success m-bottom-sm" href="<?php echo CController::createUrl('site/contact'); ?>"><i class="fa fa-envelope"></i> Contactanos</a>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.padding-md -->
	</div><!-- /wrapper -->

