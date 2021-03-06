<div class="row-fluid">
	<div class="position-relative">
		<div id="login-box" class="login-box visible widget-box no-border">
			<div class="widget-body">
				<div class="widget-main">
					<h4 class="header blue lighter bigger">
						<i class="icon-coffee green"></i>
						Informe seus dados
					</h4>

					<div class="space-6"></div>
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->FormAce->create('',array('action'=>'logar')); ?>
					<?php echo $this->FormAce->input('login',array('maxlength'=>'30','label'=>array('class'=>'sr-only'),'class'=>'form-control','placeholder'=>'Login','div'=>false, 'required'=>true, 'autofocus'=>true)); ?>
					<?php echo $this->FormAce->input('senha',array('type'=>'password','label'=>array('class'=>'sr-only'),'class'=>'form-control','placeholder'=>'Senha','div'=>false, 'required'=>true)); ?>
					<?php echo $this->FormAce->submit('Logar',array('class'=>'btn btn-success')); ?>
					<?php echo $this->FormAce->end(); ?>
				</div><!--/widget-main-->
			</div><!--/widget-body-->
		</div><!--/login-box-->
	</div>
</div>
