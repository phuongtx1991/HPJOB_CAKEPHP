<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiAccount $dtbApiAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Api Account'), ['action' => 'edit', $dtbApiAccount->api_account_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Api Account'), ['action' => 'delete', $dtbApiAccount->api_account_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiAccount->api_account_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Api Account'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Api Account'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbApiAccount view large-9 medium-8 columns content">
    <h3><?= h($dtbApiAccount->api_account_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Api Account Id') ?></th>
            <td><?= $this->Number->format($dtbApiAccount->api_account_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enable') ?></th>
            <td><?= $this->Number->format($dtbApiAccount->enable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($dtbApiAccount->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbApiAccount->create_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbApiAccount->update_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Api Access Key') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbApiAccount->api_access_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Api Secret Key') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbApiAccount->api_secret_key)); ?>
    </div>
</div>
