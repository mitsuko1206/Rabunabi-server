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
                <h3><?=$this->fetch("title")?></h3>
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
                    <?php $this->Form->create();?>
                    <div class="x_content">
                        <div>
                        <p>男性</p>
                            <br>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                    初期ポイント
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?=$this->Form->control("initialPointsMale", ["label" => false, "class" => "form-control"])?>
                                </div>

                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                送る
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?=$this->Form->control("sendMessageMale", ["label" => false, "class" => "form-control"])?>
                                </div>

                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                読む
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?=$this->Form->control("readMessageMale", ["label" => false, "class" => "form-control"])?>
                                </div>

                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                画像を送る
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?=$this->Form->control("sendImageMale", ["label" => false, "class" => "form-control"])?>
                                </div>
                            </div>


                            <p>初期ポイント</p>


                            <p>女性</p>
                        </div>



                    </div>
                    <?=$this->Form->end()?>
                </div>
            </div>
        </div>
    </div>
</div>