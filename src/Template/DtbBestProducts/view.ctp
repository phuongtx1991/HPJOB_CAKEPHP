<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBestProduct $dtbBestProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Best Product'), ['action' => 'edit', $dtbBestProduct->best_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Best Product'), ['action' => 'delete', $dtbBestProduct->best_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBestProduct->best_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Best Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Best Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbBestProducts view large-9 medium-8 columns content">
    <h3><?= h($dtbBestProduct->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Best Id') ?></th>
            <td><?= $this->Number->format($dtbBestProduct->best_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Id') ?></th>
            <td><?= $this->Number->format($dtbBestProduct->category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($dtbBestProduct->rank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Id') ?></th>
            <td><?= $this->Number->format($dtbBestProduct->product_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creator Id') ?></th>
            <td><?= $this->Number->format($dtbBestProduct->creator_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($dtbBestProduct->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbBestProduct->create_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbBestProduct->update_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBestProduct->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBestProduct->comment)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBestProduct->comment_vn)); ?>
    </div>
</div>
