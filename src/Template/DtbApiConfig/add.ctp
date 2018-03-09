<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiConfig $dtbApiConfig
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Api Config'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbApiConfig form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbApiConfig) ?>
    <fieldset>
        <legend><?= __('Add Dtb Api Config') ?></legend>
        <?php
            echo $this->Form->control('operation_name');
            echo $this->Form->control('operation_description');
            echo $this->Form->control('auth_types');
            echo $this->Form->control('enable');
            echo $this->Form->control('is_log');
            echo $this->Form->control('sub_data');
            echo $this->Form->control('del_flg');
            echo $this->Form->control('create_date');
            echo $this->Form->control('update_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
