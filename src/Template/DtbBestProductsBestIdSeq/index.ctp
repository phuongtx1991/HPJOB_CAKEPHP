<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBestProductsBestIdSeq[]|\Cake\Collection\CollectionInterface $dtbBestProductsBestIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Best Products Best Id Seq'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbBestProductsBestIdSeq index large-9 medium-8 columns content">
    <h3><?= __('Dtb Best Products Best Id Seq') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sequence') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbBestProductsBestIdSeq as $dtbBestProductsBestIdSeq): ?>
            <tr>
                <td><?= $this->Number->format($dtbBestProductsBestIdSeq->sequence) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbBestProductsBestIdSeq->sequence]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbBestProductsBestIdSeq->sequence]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbBestProductsBestIdSeq->sequence], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBestProductsBestIdSeq->sequence)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
