
<?php echo $this->element('/menu/navar_orders') ?>
<div class="mail">
<div class="container">
<div class="mail-grids">
                    <div class="col-md-6 mail-grid-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <h3>Contactanos</h3>
                    <h5>Estimado cliente ahora puedes contactactos, enviandonos su correo y que repuesto o vehiculo te interesa </span></h5>
                    <h4>Nuestras Oficinas estan:</h4>
                    <p>123 T. Globel Place.
                        <span>CG 09-123</span>
                        Italy, Ba. 4567
                    </p>
                    <h4>Get In Touch</h4>
                    <p>Telephone: +1 234 567 9871
                        <span>FAX: +1 234 567 9871</span>
                        E-mail: <a href="mailto:info@example.com">mail@example.com</a>
                    </p>
                    </div>
         <div class="col-md-6 contact-form wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">

        <?= $this->Form->create($order) ?>

        <fieldset>
            <?php
                echo $this->Form->input('customer', ['label' => false, 'placeholder' => 'Su nombre']);
                echo $this->Form->input('email', ['label' => false, 'placeholder' => 'Correo']);
                echo $this->Form->input('user_id', ['label' => false, 'options' => $users, 'empty' => 'seleccione vendedor']);

                echo $this->Form->input('parts._ids' ,[ 'options' => $parts, 'type' => 'select', 'empty' => 'Seleccione una Repuesto']);

                echo $this->Form->input('vehicles._ids', ['options' => $vehicles, 'type' => 'select', 'empty' => 'Seleccione un Vehiculo']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>

        </div>
        </div>
    </div>
</div>

<?php echo $this->element('menu/footer_orders') ?>

