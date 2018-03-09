<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiConfigApiConfigIdSeq $dtbApiConfigApiConfigIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Api Config Api Config Id Seq'), ['action' => 'edit', $dtbApiConfigApiConfigIdSeq->sequence]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Api Config Api Config Id Seq'), ['action' => 'delete', $dtbApiConfigApiConfigIdSeq->sequence], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiConfigApiConfigIdSeq->sequence)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Api Config Api Config Id Seq'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Api Config Api Config Id Seq'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbApiConfigApiConfigIdSeq view large-9 medium-8 columns content">
    <h3><?= h($dtbApiConfigApiConfigIdSeq->sequence) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sequence') ?></th>
            <td><?= $this->Number->format($dtbApiConfigApiConfigIdSeq->sequence) ?></td>
        </tr>
    </table>
</div>
