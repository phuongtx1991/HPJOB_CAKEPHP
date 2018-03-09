<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBkup $dtbBkup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Bkup'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbBkup form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbBkup) ?>
    <fieldset>
        <legend><?= __('Add Dtb Bkup') ?></legend>
        <?php
            echo $this->Form->control('bkup_memo');
            echo $this->Form->control('create_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
