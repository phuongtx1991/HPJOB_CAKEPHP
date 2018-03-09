<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiAccountApiAccountIdSeq $dtbApiAccountApiAccountIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Api Account Api Account Id Seq'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbApiAccountApiAccountIdSeq form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbApiAccountApiAccountIdSeq) ?>
    <fieldset>
        <legend><?= __('Add Dtb Api Account Api Account Id Seq') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
