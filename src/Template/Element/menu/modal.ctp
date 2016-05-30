<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

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