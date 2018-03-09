<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiConfig $dtbApiConfig
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Api Config'), ['action' => 'edit', $dtbApiConfig->api_config_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Api Config'), ['action' => 'delete', $dtbApiConfig->api_config_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiConfig->api_config_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Api Config'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Api Config'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbApiConfig view large-9 medium-8 columns content">
    <h3><?= h($dtbApiConfig->api_config_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Api Config Id') ?></th>
            <td><?= $this->Number->format($dtbApiConfig->api_config_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enable') ?></th>
            <td><?= $this->Number->format($dtbApiConfig->enable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Log') ?></th>
            <td><?= $this->Number->format($dtbApiConfig->is_log) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($dtbApiConfig->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbApiConfig->create_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbApiConfig->update_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Operation Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbApiConfig->operation_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Operation Description') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbApiConfig->operation_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Auth Types') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbApiConfig->auth_types)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sub Data') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbApiConfig->sub_data)); ?>
    </div>
</div>
