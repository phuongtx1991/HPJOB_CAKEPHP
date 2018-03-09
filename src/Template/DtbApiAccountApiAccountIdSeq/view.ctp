<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiAccountApiAccountIdSeq $dtbApiAccountApiAccountIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Api Account Api Account Id Seq'), ['action' => 'edit', $dtbApiAccountApiAccountIdSeq->sequence]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Api Account Api Account Id Seq'), ['action' => 'delete', $dtbApiAccountApiAccountIdSeq->sequence], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiAccountApiAccountIdSeq->sequence)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Api Account Api Account Id Seq'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Api Account Api Account Id Seq'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbApiAccountApiAccountIdSeq view large-9 medium-8 columns content">
    <h3><?= h($dtbApiAccountApiAccountIdSeq->sequence) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sequence') ?></th>
            <td><?= $this->Number->format($dtbApiAccountApiAccountIdSeq->sequence) ?></td>
        </tr>
    </table>
</div>
