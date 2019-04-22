<div class="index large-4 medium-4 large-offset-4 columns">
    <div class="panel">
        <?= $this->Flash->render('auth') ?>
        <h2 class="text-center"> Log in</h2>
        <?= $this->Form->create(); ?>
        <?= $this->Form->control('username'); ?>
        <?= $this->Form->control('password',['type'=>'password']); ?>
        <?= $this->Form->submit('Log in',['class'=>'button']); ?>
        <?= $this->Form->End(); ?>
    </div>
</div>
