<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBaseinfo[]|\Cake\Collection\CollectionInterface $dtbBaseinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Baseinfo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbBaseinfo index large-9 medium-8 columns content">
    <h3><?= __('Dtb Baseinfo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('law_country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('law_pref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('free_rule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('point_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('welcome_point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('downloadable_days') ?></th>
                <th scope="col"><?= $this->Paginator->sort('downloadable_days_unlimited') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exchange_rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbBaseinfo as $dtbBaseinfo): ?>
            <tr>
                <td><?= $this->Number->format($dtbBaseinfo->id) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->country_id) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->pref) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->law_country_id) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->law_pref) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->free_rule) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->point_rate) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->welcome_point) ?></td>
                <td><?= h($dtbBaseinfo->update_date) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->downloadable_days) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->downloadable_days_unlimited) ?></td>
                <td><?= $this->Number->format($dtbBaseinfo->exchange_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbBaseinfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbBaseinfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbBaseinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBaseinfo->id)]) ?>
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
