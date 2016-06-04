	<div id="home" class="banner a-banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="head-logo">
					<a href="index.html"><?= $this->Html->image('logo.png') ?></a>
				</div>
				<div class="top-nav">
					<span class="menu"><?= $this->Html->image('menu.png') ?></span>
					<ul class="nav1">
            <li class="hvr-sweep-to-bottom">
              <?= $this->Html->link('Inicio <i>' . $this->Html->image('nav-but1.png') . '</i>', ['controller' => 'Users', 'action' => 'login'], ['escape' => false]) ?>
            </li>
                        <li class="hvr-sweep-to-bottom"><a data-toggle="modal" data-target="#myModal">Ingresar<center><img src="images/nav-but2.png" alt=""/></center><i>
                        </i></a>
                        </li>
            <li class="hvr-sweep-to-bottom">
              <?= $this->Html->link('Respuestos <i>' . $this->Html->image('nav-but3.png') . '</i>', ['controller' => 'Parts', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li class="hvr-sweep-to-bottom active">
              <?= $this->Html->link('Camiones <i>' . $this->Html->image('nav-but4.png') . '</i>', ['controller' => 'Vehicles', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li class="hvr-sweep-to-bottom">
              <?= $this->Html->link('Contactanos <i>' . $this->Html->image('nav-but5.png') . '</i>', ['controller' => 'Orders', 'action' => 'add'], ['escape' => false]) ?>
            </li>

                        <div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>

	<!-- modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

     Modal content
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ingrese sus Datos</h4>
              </div>
              <div class="modal-body">
                
                <?= $this->Form->create() ?>
                    <fieldset>
                        <?= $this->Form->input('username') ?>
                        <?= $this->Form->input('password') ?>
                    </fieldset>
                <?= $this->Form->button(__('Login')); ?>
                <?= $this->Form->end() ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

  </div>
</div>