<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBestProduct[]|\Cake\Collection\CollectionInterface $dtbBestProducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Best Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbBestProducts index large-9 medium-8 columns content">
    <h3><?= __('Dtb Best Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('best_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rank') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creator_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbBestProducts as $dtbBestProduct): ?>
            <tr>
                <td><?= $this->Number->format($dtbBestProduct->best_id) ?></td>
                <td><?= $this->Number->format($dtbBestProduct->category_id) ?></td>
                <td><?= $this->Number->format($dtbBestProduct->rank) ?></td>
                <td><?= $this->Number->format($dtbBestProduct->product_id) ?></td>
                <td><?= $this->Number->format($dtbBestProduct->creator_id) ?></td>
                <td><?= h($dtbBestProduct->create_date) ?></td>
                <td><?= h($dtbBestProduct->update_date) ?></td>
                <td><?= $this->Number->format($dtbBestProduct->del_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbBestProduct->best_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbBestProduct->best_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbBestProduct->best_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBestProduct->best_id)]) ?>
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
