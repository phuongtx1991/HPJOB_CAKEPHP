<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBestProductsBestIdSeq $dtbBestProductsBestIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Best Products Best Id Seq'), ['action' => 'edit', $dtbBestProductsBestIdSeq->sequence]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Best Products Best Id Seq'), ['action' => 'delete', $dtbBestProductsBestIdSeq->sequence], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBestProductsBestIdSeq->sequence)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Best Products Best Id Seq'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Best Products Best Id Seq'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbBestProductsBestIdSeq view large-9 medium-8 columns content">
    <h3><?= h($dtbBestProductsBestIdSeq->sequence) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sequence') ?></th>
            <td><?= $this->Number->format($dtbBestProductsBestIdSeq->sequence) ?></td>
        </tr>
    </table>
</div>
