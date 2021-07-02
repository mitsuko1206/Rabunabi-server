<?php
/* @var \App\View\AppView $this */
$this->assign("title", __("ポイント"));
echo $this->Html->script("https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js");
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>ポイント</h2>
                        <div class="clearfix"></div>
                    </div>
                    <?php $this->Form->create($points);?>
                    <div class="x_content">
                        <br>
                        <?php foreach($points as $point): ?>
                            <div>
                                <h1><?php echo $point['Points']['id'] ?></h1>
                                <?php if($point['Points']['id'] == 1) { ?>
                                <h1>Male</h1>
                                <?php } else { ?>
                                <h1>Female</h1>
                                <?php } ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>