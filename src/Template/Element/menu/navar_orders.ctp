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
						<li class="hvr-sweep-to-bottom"><a <?= $this->Html->link(__('Inicio'), ['controller' => 'Pages', 'action' => 'display'])?> <center><img src="../images/nav-but1.png" alt=""/></center><i>
                        </i></a>
                        </li>

                        <li class="hvr-sweep-to-bottom"><a <?= $this->Html->link(__('Nosotros'), ['controller' => 'Users', 'action' => 'index'])?> <center><img src="../images/nav-but2.png" alt=""/></center><i>
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