<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBkup $dtbBkup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Bkup'), ['action' => 'edit', $dtbBkup->bkup_name]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Bkup'), ['action' => 'delete', $dtbBkup->bkup_name], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBkup->bkup_name)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Bkup'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Bkup'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbBkup view large-9 medium-8 columns content">
    <h3><?= h($dtbBkup->bkup_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbBkup->create_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Bkup Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBkup->bkup_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Bkup Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBkup->bkup_memo)); ?>
    </div>
</div>
