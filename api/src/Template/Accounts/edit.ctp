<?php
/* @var \App\View\AppView $this */
/* @var \App\Model\Entity\Account $account */
$this->assign("title", __("ユーザー情報"));
?>
<style>
    .checkbox{
        margin-top: 0;
    }
</style>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $this->fetch("title") ?></h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= __("ユーザー情報") ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?= $this->Form->create($account) ?>
                        <div class="form-group">
                            <label for=""><?= __("会員ID") ?></label>
                            <p><?= $account->id ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><?= __("ニックネーム") ?></label>
                            <p><?= $account->nickname ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">国籍</label>
                            <p><?= $this->Html->image('flags/flag_' . $account->nationality . '.png', ['width' => 25]) ?> <?= \App\Utility\AppUtil::getCountries()[$account->nationality] ?></p>
                        </div>
                        <div class="form-group">
                            <label><?= __("性別") ?></label>
                            <?= $this->Form->control("gender", ["label" => false, "type" => "select", "options" => \App\Model\Entity\Account::getGenders(), "class" => "form-control"]); ?>                 
                        </div>
                        <div class="form-group">
                            <label><?= __("年齢") ?></label>
                            <p><?= $this->Form->control("age", ["label" => false, "class" => "form-control"]) ?></p>
                        </div>
                        <div class="form-group">
                            <label><?= __("Memo") ?></label>
                            <?= $this->Form->control("memo", ["label" => false, "class" => "form-control"]); ?>
                        </div>
                        <div class="form-group">
                            <label><?= __("ステータス") ?></label>
                            <?= $this->Form->control("status", ["label" => false, "type" => "select", "options" => \App\Model\Entity\Account::getStatus(), "class" => "form-control"]); ?>
                        </div>
                        <div class="form-group">
                            <label><?= __("ポイント") ?></label>
                            <p><?= $this->Form->control("point", ["label" => false, "class" => "form-control"]) ?></p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
