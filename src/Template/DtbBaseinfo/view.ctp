<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbBaseinfo $dtbBaseinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Baseinfo'), ['action' => 'edit', $dtbBaseinfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Baseinfo'), ['action' => 'delete', $dtbBaseinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbBaseinfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Baseinfo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Baseinfo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbBaseinfo view large-9 medium-8 columns content">
    <h3><?= h($dtbBaseinfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Id') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->country_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pref') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->pref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Law Country Id') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->law_country_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Law Pref') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->law_pref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Free Rule') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->free_rule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point Rate') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->point_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Welcome Point') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->welcome_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Downloadable Days') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->downloadable_days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Downloadable Days Unlimited') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->downloadable_days_unlimited) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exchange Rate') ?></th>
            <td><?= $this->Number->format($dtbBaseinfo->exchange_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbBaseinfo->update_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Company Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->company_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Company Kana') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->company_kana)); ?>
    </div>
    <div class="row">
        <h4><?= __('Zip01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->zip01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Zip02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->zip02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Zipcode') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->zipcode)); ?>
    </div>
    <div class="row">
        <h4><?= __('Addr01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->addr01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Addr02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->addr02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->tel01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->tel02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->tel03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->fax01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->fax02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->fax03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Business Hour') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->business_hour)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Company') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_company)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Manager') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_manager)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Zip01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_zip01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Zip02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_zip02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Zipcode') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_zipcode)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Addr01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_addr01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Addr02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_addr02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Tel01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_tel01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Tel02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_tel02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Tel03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_tel03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Fax01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_fax01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Fax02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_fax02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Fax03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_fax03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Email') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Url') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term04') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term04)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term05') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term05)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term06') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term06)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term07') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term07)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term08') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term08)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term09') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term09)); ?>
    </div>
    <div class="row">
        <h4><?= __('Law Term10') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->law_term10)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->email01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->email02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->email03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email04') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->email04)); ?>
    </div>
    <div class="row">
        <h4><?= __('Shop Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->shop_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Shop Kana') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->shop_kana)); ?>
    </div>
    <div class="row">
        <h4><?= __('Shop Name Eng') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->shop_name_eng)); ?>
    </div>
    <div class="row">
        <h4><?= __('Top Tpl') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->top_tpl)); ?>
    </div>
    <div class="row">
        <h4><?= __('Product Tpl') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->product_tpl)); ?>
    </div>
    <div class="row">
        <h4><?= __('Detail Tpl') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->detail_tpl)); ?>
    </div>
    <div class="row">
        <h4><?= __('Mypage Tpl') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->mypage_tpl)); ?>
    </div>
    <div class="row">
        <h4><?= __('Good Traded') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->good_traded)); ?>
    </div>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->message)); ?>
    </div>
    <div class="row">
        <h4><?= __('Regular Holiday Ids') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->regular_holiday_ids)); ?>
    </div>
    <div class="row">
        <h4><?= __('Latitude') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->latitude)); ?>
    </div>
    <div class="row">
        <h4><?= __('Longitude') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbBaseinfo->longitude)); ?>
    </div>
</div>
