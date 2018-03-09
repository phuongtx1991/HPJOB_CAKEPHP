<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiConfigApiConfigIdSeq[]|\Cake\Collection\CollectionInterface $dtbApiConfigApiConfigIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Api Config Api Config Id Seq'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbApiConfigApiConfigIdSeq index large-9 medium-8 columns content">
    <h3><?= __('Dtb Api Config Api Config Id Seq') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sequence') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbApiConfigApiConfigIdSeq as $dtbApiConfigApiConfigIdSeq): ?>
            <tr>
                <td><?= $this->Number->format($dtbApiConfigApiConfigIdSeq->sequence) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbApiConfigApiConfigIdSeq->sequence]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbApiConfigApiConfigIdSeq->sequence]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbApiConfigApiConfigIdSeq->sequence], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiConfigApiConfigIdSeq->sequence)]) ?>
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
