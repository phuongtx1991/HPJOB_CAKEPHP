<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBestProduct $dtbBestProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Best Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbBestProducts form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbBestProduct) ?>
    <fieldset>
        <legend><?= __('Add Dtb Best Product') ?></legend>
        <?php
            echo $this->Form->control('category_id');
            echo $this->Form->control('rank');
            echo $this->Form->control('product_id');
            echo $this->Form->control('title');
            echo $this->Form->control('comment');
            echo $this->Form->control('comment_vn');
            echo $this->Form->control('creator_id');
            echo $this->Form->control('create_date');
            echo $this->Form->control('update_date');
            echo $this->Form->control('del_flg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
