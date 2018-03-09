<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBkup[]|\Cake\Collection\CollectionInterface $dtbBkup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Bkup'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbBkup index large-9 medium-8 columns content">
    <h3><?= __('Dtb Bkup') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbBkup as $dtbBkup): ?>
            <tr>
                <td><?= h($dtbBkup->create_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbBkup->bkup_name]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbBkup->bkup_name]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbBkup->bkup_name], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBkup->bkup_name)]) ?>
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
