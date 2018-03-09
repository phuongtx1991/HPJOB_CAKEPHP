<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbApiConfigApiConfigIdSeq $dtbApiConfigApiConfigIdSeq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dtbApiConfigApiConfigIdSeq->sequence],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dtbApiConfigApiConfigIdSeq->sequence)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dtb Api Config Api Config Id Seq'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbApiConfigApiConfigIdSeq form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbApiConfigApiConfigIdSeq) ?>
    <fieldset>
        <legend><?= __('Edit Dtb Api Config Api Config Id Seq') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>