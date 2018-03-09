<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiConfig[]|\Cake\Collection\CollectionInterface $dtbApiConfig
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Api Config'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbApiConfig index large-9 medium-8 columns content">
    <h3><?= __('Dtb Api Config') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('api_config_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_log') ?></th>
                <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbApiConfig as $dtbApiConfig): ?>
            <tr>
                <td><?= $this->Number->format($dtbApiConfig->api_config_id) ?></td>
                <td><?= $this->Number->format($dtbApiConfig->enable) ?></td>
                <td><?= $this->Number->format($dtbApiConfig->is_log) ?></td>
                <td><?= $this->Number->format($dtbApiConfig->del_flg) ?></td>
                <td><?= h($dtbApiConfig->create_date) ?></td>
                <td><?= h($dtbApiConfig->update_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbApiConfig->api_config_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbApiConfig->api_config_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbApiConfig->api_config_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiConfig->api_config_id)]) ?>
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
