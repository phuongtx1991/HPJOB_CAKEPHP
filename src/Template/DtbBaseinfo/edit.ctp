<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBaseinfo $dtbBaseinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dtbBaseinfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBaseinfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dtb Baseinfo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbBaseinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbBaseinfo) ?>
    <fieldset>
        <legend><?= __('Edit Dtb Baseinfo') ?></legend>
        <?php
            echo $this->Form->control('company_name');
            echo $this->Form->control('company_kana');
            echo $this->Form->control('zip01');
            echo $this->Form->control('zip02');
            echo $this->Form->control('zipcode');
            echo $this->Form->control('country_id');
            echo $this->Form->control('pref');
            echo $this->Form->control('addr01');
            echo $this->Form->control('addr02');
            echo $this->Form->control('tel01');
            echo $this->Form->control('tel02');
            echo $this->Form->control('tel03');
            echo $this->Form->control('fax01');
            echo $this->Form->control('fax02');
            echo $this->Form->control('fax03');
            echo $this->Form->control('business_hour');
            echo $this->Form->control('law_company');
            echo $this->Form->control('law_manager');
            echo $this->Form->control('law_zip01');
            echo $this->Form->control('law_zip02');
            echo $this->Form->control('law_zipcode');
            echo $this->Form->control('law_country_id');
            echo $this->Form->control('law_pref');
            echo $this->Form->control('law_addr01');
            echo $this->Form->control('law_addr02');
            echo $this->Form->control('law_tel01');
            echo $this->Form->control('law_tel02');
            echo $this->Form->control('law_tel03');
            echo $this->Form->control('law_fax01');
            echo $this->Form->control('law_fax02');
            echo $this->Form->control('law_fax03');
            echo $this->Form->control('law_email');
            echo $this->Form->control('law_url');
            echo $this->Form->control('law_term01');
            echo $this->Form->control('law_term02');
            echo $this->Form->control('law_term03');
            echo $this->Form->control('law_term04');
            echo $this->Form->control('law_term05');
            echo $this->Form->control('law_term06');
            echo $this->Form->control('law_term07');
            echo $this->Form->control('law_term08');
            echo $this->Form->control('law_term09');
            echo $this->Form->control('law_term10');
            echo $this->Form->control('email01');
            echo $this->Form->control('email02');
            echo $this->Form->control('email03');
            echo $this->Form->control('email04');
            echo $this->Form->control('free_rule');
            echo $this->Form->control('shop_name');
            echo $this->Form->control('shop_kana');
            echo $this->Form->control('shop_name_eng');
            echo $this->Form->control('point_rate');
            echo $this->Form->control('welcome_point');
            echo $this->Form->control('update_date');
            echo $this->Form->control('top_tpl');
            echo $this->Form->control('product_tpl');
            echo $this->Form->control('detail_tpl');
            echo $this->Form->control('mypage_tpl');
            echo $this->Form->control('good_traded');
            echo $this->Form->control('message');
            echo $this->Form->control('regular_holiday_ids');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('downloadable_days');
            echo $this->Form->control('downloadable_days_unlimited');
            echo $this->Form->control('exchange_rate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
