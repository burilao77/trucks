	<div id="home" class="banner a-banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="head-logo">
					<a href="index.html"><img src="../images/logo.png" alt="" /></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="../images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom"><a <?= $this->Html->link(__('Inicio'), ['controller' => 'Users', 'action' => 'login'])?> <center><img src="../images/nav-but1.png" alt=""/></center><i>
                        </i></a>
                        </li>
                        <li class="hvr-sweep-to-bottom"><a data-toggle="modal" data-target="#myModal">Ingresar<center><img src="../images/nav-but2.png" alt=""/></center><i>
                        </i></a>
                        </li>
                        <li class="hvr-sweep-to-bottom"><a <?= $this->Html->link(__('Repuestos'), ['controller' => 'Parts', 'action' => 'index'])?> <center><img src="../images/nav-but3.png" alt=""/></center><i>
                        </i></a>
                        </li>
                        <li class="hvr-sweep-to-bottom"><a <?= $this->Html->link(__('Camiones'), ['controller' => 'Vehicles', 'action' => 'index'])?> <center><img src="../images/nav-but4.png" alt=""/></center><i>
                        </i></a>
                        </li>
                        <li class="hvr-sweep-to-bottom active"><a <?= $this->Html->link(__('Contactanos'), ['controller' => 'Orders', 'action' => 'add'])?> <center><img src="../images/nav-but5.png" alt=""/></center><i>
                        </i></a>
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
                <?= $this->Flash->render('auth') ?>
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