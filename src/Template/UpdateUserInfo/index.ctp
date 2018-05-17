<link rel="stylesheet" href="css/common/bootstrap-datepicker.min.css" />
<link rel="stylesheet" href="css/screen/user-edit.css">
<link rel="stylesheet" href="css/common/bootstrap-select.css">

<div class="container" style="margin-top: 100px;margin-left: 5px;margin-right: 5px">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-wizard">
            <!-- Form Wizard -->
            <form role="form" action="" method="post">

                <h3><?= $updateuserinfo['update_user_info'] ?></h3>
                <p><?= $updateuserinfo['user_info_step'] ?></p>
                <!-- Form progress -->
                <div class="form-wizard-steps form-wizard-tolal-steps-4">
                    <div class="form-wizard-progress">
                        <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                    </div>
                    <!-- Step 1 -->
                    <div class="form-wizard-step active" >
                        <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <p>personal</p>
                    </div>
                    <!-- Step 1 -->

                    <!-- Step 2 -->
                    <div class="form-wizard-step">
                        <div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                        <p>Contact</p>
                    </div>
                    <!-- Step 2 -->

                    <!-- Step 3 -->
                    <div class="form-wizard-step">
                        <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                        <p>Expectations</p>
                    </div>
                    <!-- Step 3 -->

                    <!-- Step 4 -->
                    <div class="form-wizard-step">
                        <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <p>Education</p>
                    </div>
                    <!-- Step 4 -->

                </div>
                <!-- Form progress -->

                <!-- Form Step 1 -->
                <fieldset >

                    <h4><b><?= $updateuserinfo['user_info'] ?></b><span><?= $updateuserinfo['step'] ?> 1 - 4</span></h4>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_name01'] ?><span>*</span></label>
                        <input type="text" name="name01" placeholder="" class="form-control required" value="<?= $customInfo['name01'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_name02'] ?><span>*</span></label>
                        <input type="text" name="name02" placeholder="" class="form-control required" value="<?= $customInfo['name02'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_kana01'] ?></label>
                        <input type="text" name="kana01" placeholder="Nhập tên phiên âm theo katakana" class="form-control" value="<?= $customInfo['kana01'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_kana02'] ?></label>
                        <input type="text" name="kana02" placeholder="Nhập họ phiên âm theo katakana" class="form-control" value="<?= $customInfo['kana02'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_sex'] ?></label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="1" <?= ($customInfo['sex'] == 1)? 'checked' : '' ?> > <?= $updateuserinfo['label_sex_male'] ?>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="2" <?= ($customInfo['sex'] == 2)? 'checked' : '' ?> > <?= $updateuserinfo['label_sex_female'] ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_birth_day'] ?></label>
                    </div>
                    <div class="row form-inline form-group">
                        <div class="form-group col-md-4 col-xs-4">
                            <label><?= $updateuserinfo['label_birth_day_d'] ?></label>
                            <?=
                            $this->Form->day('birth_day', [
                            'leadingZeroValue' => true,
                            'value' => !empty($customInfo['birth_day']) ? $customInfo['birth_day']->i18nFormat('dd') : date("d"),
                            'data-size' => '5',
                            'class' => 'form-control selectpicker',
                            'empty' => false
                            ]);
                            ?>
                        </div>
                        <div class="form-group col-md-4 col-xs-4">
                            <label><?= $updateuserinfo['label_birth_day_m'] ?></label>
                            <?=
                            $this->Form->month('birth_day', [
                            'monthNames' => false,
                            'value' => !empty($customInfo['birth_day']) ? $customInfo['birth_day']->i18nFormat('MM') : date("M"),
                            'data-size' => '5',
                            'class' => 'form-control selectpicker',
                            'leadingZeroValue' => true,
                            'empty' => false
                            ]);
                            ?>
                        </div>
                        <div class="form-group col-md-4 col-xs-4">
                            <label><?= $updateuserinfo['label_birth_day_y'] ?></label>
                            <?=
                            $this->Form->year('birth_day', [
                            'minYear' => 1970,
                            'maxYear' => date('Y'),
                            'value' => !empty($customInfo['birth_day']) ? $customInfo['birth_day']->i18nFormat('YYYY') : date("Y"),
                            'empty' => false,
                            'data-size' => '5',
                            'class' => 'form-control selectpicker',
                            'orderYear' => 'asc'
                            ]);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><?= $updateuserinfo['label_marital_status'] ?><span>*</span></label>
                        <label class="radio-inline">
                            <input type="radio" name="marital_status" value="1" <?= ($customInfo['marital_status'] == 1)? 'checked' : '' ?>> <?= $updateuserinfo['label_marital_alone'] ?>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="marital_status" value="2" <?= ($customInfo['marital_status'] == 2)? 'checked' : '' ?>> <?= $updateuserinfo['label_marital_married'] ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_reminder'] ?><span>*</span></label>
                        <div class="form-group">
                            <?=
                            $this->Form->select(
                            'reminder',
                            $updateuserinfo['reminder'],
                            [
                            'class' => 'form-control selectpicker',
                            'default' => !empty($customInfo['reminder']) ? $customInfo['reminder'] : '',
                            'title' => $updateuserinfo['reminder_title']
                            ]
                            )
                            ?>
                        </div>
                        <input type="text" name="reminder_answer" placeholder="<?= $updateuserinfo['reminder_anser_title_'] ?>" class="form-control required" value="<?= $customInfo['reminder_answer'] ?>">
                    </div>
                    <div class="form-wizard-buttons">
                        <button type="button" class="btn btn-next btn-fix"><?= $updateuserinfo['btn_next'] ?></button>
                    </div>
                </fieldset>
                <!-- Form Step 1 -->

                <!-- Form Step 2 -->
                <fieldset>

                    <h4><b><?= $updateuserinfo['user_contact_info'] ?></b><span><?= $updateuserinfo['step'] ?> 2 - 4</span></h4>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_phone'] ?><span>*</span></label>
                        <input type="number" name="phone" placeholder="<?= $updateuserinfo['phone_title'] ?>" class="form-control required" value="<?= $customInfo['phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_current_residence'] ?><span>*</span></label>
                        <label class="radio-inline">
                            <input type="radio" name="current_address" value="1" <?= ($customInfo['current_address'] == 1)? 'checked' : '' ?>><?= $updateuserinfo['label_residence_vn'] ?>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="current_address" value="2" <?= ($customInfo['current_address'] == 2)? 'checked' : '' ?>><?= $updateuserinfo['label_residence_jp'] ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_zip_code'] ?><span>*</span></label>
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-4 col-xs-4 ">
                            <input type="number" name="zip01" placeholder="" class="form-control" value="<?= $customInfo['zip01'] ?>">
                        </div>
                        <div class="form-group col-md-4 col-xs-4 ">
                            <input type="number" name="zip02" placeholder="" class="form-control" value="<?= $customInfo['zip02'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_prefectures'] ?><span>*</span></label>
                        <?=
                        $this->Form->select(
                        'pref',
                        $pref,
                        [
                        'class' => 'form-control selectpicker',
                        'default' => !empty($customInfo['pref']) ? $customInfo['pref'] : '',
                        'data-size' => '10',
                        'title' => "Lựa chọn tỉnh/thành phố"
                        ]
                        )
                        ?>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_municipality'] ?><span>*</span></label>
                        <input type="text" name="addr01" placeholder="" class="form-control required" value="<?= $customInfo['addr01'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_address'] ?></label>
                        <input type="text" name="addr02" placeholder="" class="form-control" value="<?= $customInfo['addr02'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_education_level'] ?><span>*</span></label>
                        <?=
                        $this->Form->select(
                        'reminder',
                        $updateuserinfo['education'],
                        [
                        'class' => 'form-control selectpicker',
                        'default' => !empty($customInfo['education']) ? $customInfo['education'] : '',
                        'title' => $updateuserinfo['education_title']
                        ]
                        )
                        ?>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_school_name'] ?><span>*</span></label>
                        <input type="text" name="school_name" placeholder="" class="form-control required" value="<?= $customInfo['school_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_major'] ?><span>*</span></label>
                        <input type="text" name="major" placeholder="" class="form-control required" value="<?= $customInfo['major'] ?>">
                    </div>

                    <div class="form-wizard-buttons">
                        <button type="button" class="btn btn-previous btn-fix"><?= $updateuserinfo['btn_back'] ?></button>
                        <button type="button" class="btn btn-next btn-fix"><?= $updateuserinfo['btn_next'] ?></button>
                    </div>
                </fieldset>
                <!-- Form Step 2 -->

                <!-- Form Step 3 -->
                <fieldset>

                    <h4><b><?= $updateuserinfo['desired_job'] ?></b><span><?= $updateuserinfo['step'] ?> 3 - 4</span></h4>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_desired_job'] ?>
                            <!--<span>*</span>-->
                        </label>
                        <?=
                        $this->Form->select(
                        'desired_work',
                        $cart,
                        [
                        'class' => 'form-control selectpicker ',
                        'default' =>  explode(" ",$customInfo['desired_work']),
                        'data-size' => 10,
                        'data-max-options' => 3,
                        'multiple' => true,
                        'title' => $updateuserinfo['desired_job_title'],
                        ]
                        )
                        ?>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_desired_position'] ?></label>
                        <?=
                        $this->Form->select(
                        'desired_position',
                        $updateuserinfo['desired_position'],
                        [
                        'class' => 'form-control selectpicker',
                        'default' =>  explode(" ",$customInfo['desired_position']),
                        'multiple' => true,
                        'title' => $updateuserinfo['desired_position_title'],
                        ]
                        )
                        ?>
                    </div>
                    <div class="form-group">
                        <div>
                            <label><?= $updateuserinfo['label_current_salary'] ?></label>
                        </div>
                        <div class="form-group col-md-8 col-xs-8 col-sm-8" >
                            <input type="number" name="current_salary" class="form-control salary_style" value="<?= $customInfo['current_salary'] ?>">
                        </div>
                        <div class="form-group col-md-4 col-xs-4 col-sm-4 salary_title_style">
                            <label> <?= $updateuserinfo['label_jpy'] ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label><?= $updateuserinfo['label_desired_salary'] ?></label>
                        </div>
                        <div class="form-group col-md-8 col-xs-8 " >
                            <input type="number" name="desired_salary" class="form-control salary_style" value="<?= $customInfo['desired_salary'] ?>">
                        </div>
                        <div class="form-group col-md-4 col-xs-4 salary_title_style">
                            <label> <?= $updateuserinfo['label_jpy'] ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_desired_region'] ?></label>
                        <?=
                        $this->Form->select(
                        'desired_region',
                        $region,
                        [
                        'class' => 'form-control selectpicker',
                        'default' =>  explode(" ",$customInfo['desired_region']),
                        'data-size' => '10',
                        'multiple' => true,
                        'data-max-options' => 3,
                        'title' => $updateuserinfo['desired_region_title']
                        ]
                        )
                        ?>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_work_experience'] ?><span>*</span></label>
                        <div class="form-group">
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="work_experience" value="0" <?= ($customInfo['work_experience'] == 0)? 'checked' : '' ?>> <?= $updateuserinfo['label_no_exp'] ?>
                                </label>
                            </div>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="work_experience" value="1" <?= ($customInfo['work_experience'] == 1)? 'checked' : '' ?>> <?= $updateuserinfo['label_experienced'] ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($customExp as $key => $item): ?>
                    <div class="form-group border-radius-4" style="border: red solid 2px;padding: 2%;">
                            <label><b><?= $updateuserinfo['label_project'] ?> <?= $key + 1 ?></b> </label>
                            <div class="form-group">
                                <label><?= $updateuserinfo['label_position'] ?><span>*</span></label>
                                <input type="text" name="project_<?= $key + 1 ?>[exp_position]" placeholder="" class="form-control required" value="<?= $item['position'] ?>">
                            </div>
                            <div class="form-group">
                                <label><?= $updateuserinfo['label_company'] ?><span>*</span></label>
                                <input type="text" name="project_<?= $key + 1 ?>[working_company_name]" placeholder="" class="form-control required" value="<?= $item['working_company_name'] ?>">
                            </div>
                            <div class="input-daterange datepicker">
                                <div class="form-group">
                                    <label><?= $updateuserinfo['label_start_date'] ?><span>*</span></label>
                                    <input type="text" name="project_<?= $key + 1 ?>[start_date]" placeholder="" class="form-control border-radius-4 required" value="<?= $item['start_date']->i18nFormat('MM-YYYY') ?>">
                                </div>
                                <div class="form-group">
                                    <label><?= $updateuserinfo['label_end_date'] ?><span>*</span></label>
                                    <input type="text" name="project_<?= $key + 1 ?>[end_date]" placeholder="" class="form-control border-radius-4 required" value="<?= $item['end_date']->i18nFormat('MM-YYYY') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?= $updateuserinfo['label_Description'] ?></label>
                                <textarea cols="10" rows="2" charswidth="23" class="form-control textarea-ver-fix required" name="project_<?= $key + 1 ?>[job_description]"><?= $item['job_description'] ?></textarea>
                            </div>
                            <input type="hidden" name="project_<?= $key + 1 ?>[exp_id]" value="<?= $item['id'] ?>">
                    </div>
                    <?php endforeach; ?>
                    <?php if(count($customExp) < 2) : ?>
                        <?php for($i=count($customExp);$i<2;$i++) : ?>
                            <div class="form-group border-radius-4" style="border: red solid 2px;padding: 2%;">
                                <label><b><?= $updateuserinfo['label_project'] ?> <?= $i  + 1 ?></b> </label>
                                <div class="form-group">
                                    <label><?= $updateuserinfo['label_position'] ?><span>*</span></label>
                                    <input type="text" name="project_<?= $i + 1 ?>[exp_position]" placeholder="" class="form-control required" value="">
                                </div>
                                <div class="form-group">
                                    <label><?= $updateuserinfo['label_company'] ?><span>*</span></label>
                                    <input type="text" name="project_<?= $i + 1 ?>[working_company_name]" placeholder="" class="form-control required" value="">
                                </div>
                                <div class="input-daterange datepicker">
                                    <div class="form-group">
                                        <label><?= $updateuserinfo['label_start_date'] ?><span>*</span></label>
                                        <input type="text" name="project_<?= $i + 1 ?>[start_date]" placeholder="" class="form-control border-radius-4 required" value="">
                                    </div>
                                    <div class="form-group">
                                        <label><?= $updateuserinfo['label_end_date'] ?><span>*</span></label>
                                        <input type="text" name="project_<?= $i + 1 ?>[end_date]" placeholder="" class="form-control border-radius-4 required" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><?= $updateuserinfo['label_Description'] ?></label>
                                    <textarea cols="10" rows="2" charswidth="23" class="form-control textarea-ver-fix required" name="project_<?= $i + 1 ?>[job_description]"></textarea>
                                </div>
                                <input type="hidden" name="project_<?= $i + 1 ?>[exp_id]" value="">
                            </div>
                        <?php endfor; ?>
                    <?php endif; ?>
                    <!--<input type="hidden" name="exp_num" value="<?= count($customExp) ?>">-->
                    <br/>
                    <div class="form-wizard-buttons">
                        <button type="button" class="btn btn-previous btn-fix"><?= $updateuserinfo['btn_back'] ?></button>
                        <button type="button" class="btn btn-next btn-fix"><?= $updateuserinfo['btn_next'] ?></button>
                    </div>
                </fieldset>
                <!-- Form Step 3 -->

                <!-- Form Step 4 -->
                <fieldset>
                    <h4><b><?= $updateuserinfo['skills_education'] ?></b> <span><?= $updateuserinfo['step'] ?> 4 - 4</span></h4>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_jp_language'] ?></label>
                        <div class="form-group">
                            <?=
                            $this->Form->select(
                            'jp_level',
                            [1=>'N1',2=>'N2',3=>'N3',4=>'N4',5=>'N5'],
                            [
                            'class' => 'form-control selectpicker',
                            'default' =>  !empty($customInfo['jp_level']) ? $customInfo['jp_level'] : '',
                            'title' => 'JLPT'
                            ]
                            )
                            ?>
                        </div>
                        <input type="text" name="jp_other" placeholder="<?= $updateuserinfo['label_title_jp'] ?>" class="form-control" value="<?= $customInfo['jp_other'] ?>">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_en_language'] ?></label>
                        <div class="form-group">
                            <input type="Number" name="toeic" placeholder="<?= $updateuserinfo['label_title_toeic'] ?>" value="<?= $customInfo['toeic'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="Number" name="ielts" placeholder="<?= $updateuserinfo['label_title_ielts'] ?>" value="<?= $customInfo['ielts'] ?>" class="form-control">
                        </div>
                        <input type="text" name="eng_other" placeholder="<?= $updateuserinfo['label_title_en'] ?>" value="<?= $customInfo['eng_other'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_other_language'] ?></label>
                        <textarea cols="10" rows="2" charswidth="23" class="form-control textarea-ver-fix" name="other_language"><?= $customInfo['other_language'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_qualification'] ?></label>
                        <textarea cols="10" rows="2" charswidth="23" class="form-control textarea-ver-fix" name="qualification"><?= $customInfo['qualification'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_skill'] ?></label>
                        <textarea cols="10" rows="2" charswidth="23" class="form-control textarea-ver-fix" name="skill"><?= $customInfo['skill'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label><?= $updateuserinfo['label_self_pr'] ?></label>
                        <textarea cols="10" rows="2" charswidth="23" class="form-control textarea-ver-fix" name="self_pr"><?= $customInfo['self_pr'] ?></textarea>
                    </div>
                    <br/>
                    <input type="hidden" name="customer_id" value="<?= $userData['customer_id'] ?>">
                    <div class="form-wizard-buttons">
                        <button type="button" class="btn btn-previous btn-fix"><?= $updateuserinfo['btn_back'] ?></button>
                        <button type="submit" class="btn btn-submit btn-fix"><?= $updateuserinfo['btn_submit'] ?></button>
                    </div>
                </fieldset>
                <!-- Form Step 4 -->
            </form>
            <!-- Form Wizard -->
        </div>
    </div>
</div>

<script type="text/javascript" src="js/common/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/common/bootstrap-datepicker.vi.min.js"></script>
<script type="text/javascript" src="js/common/bootstrap-datepicker.ja.min.js"></script>
<script  src="js/screen/user-edit.js"></script>
<script src="js/common/bootstrap-select.js"></script>




