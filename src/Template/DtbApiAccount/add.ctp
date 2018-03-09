<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiAccount $dtbApiAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Api Account'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbApiAccount form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbApiAccount) ?>
    <fieldset>
        <legend><?= __('Add Dtb Api Account') ?></legend>
        <?php
            echo $this->Form->control('api_access_key');
            echo $this->Form->control('api_secret_key');
            echo $this->Form->control('enable');
            echo $this->Form->control('del_flg');
            echo $this->Form->control('create_date');
            echo $this->Form->control('update_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
