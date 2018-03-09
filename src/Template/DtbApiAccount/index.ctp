<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiAccount[]|\Cake\Collection\CollectionInterface $dtbApiAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Api Account'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbApiAccount index large-9 medium-8 columns content">
    <h3><?= __('Dtb Api Account') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('api_account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbApiAccount as $dtbApiAccount): ?>
            <tr>
                <td><?= $this->Number->format($dtbApiAccount->api_account_id) ?></td>
                <td><?= $this->Number->format($dtbApiAccount->enable) ?></td>
                <td><?= $this->Number->format($dtbApiAccount->del_flg) ?></td>
                <td><?= h($dtbApiAccount->create_date) ?></td>
                <td><?= h($dtbApiAccount->update_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbApiAccount->api_account_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbApiAccount->api_account_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbApiAccount->api_account_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiAccount->api_account_id)]) ?>
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
