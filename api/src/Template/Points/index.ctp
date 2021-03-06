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
                    
                    <div class="x_content">
                        <br>
                        <?= $this->Form->create($pointsArr, ["id" => "frmSetting", "class" => "form-horizontal form-label-left"]); ?>
                        
                           
                            <div class="form-group">
                                <p>男性</p>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">初期ポイント</label>
                                    <?=$this->Form->control("initialPointsMale", ["label" => false, "value" => $points['initialPointsMale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">送る</label>
                                    <?=$this->Form->control("sendMessageMale", ["label" => false, "value" => $points['sendMessageMale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">読む</label>
                                    <?=$this->Form->control("readMessageMale", ["label" => false, "value" => $points['readMessageMale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">画像を送る</label>
                                    <?=$this->Form->control("sendImageMale", ["label" => false, "value" => $points['sendImageMale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <div class="form-group">
                                <p>女性</p>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">初期ポイント</label>
                                    <?=$this->Form->control("initialPointsFemale", ["label" => false, "value" => $points['initialPointsFemale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">送る</label>
                                    <?=$this->Form->control("sendMessageFemale", ["label" => false, "value" => $points['sendMessageFemale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">読む</label>
                                    <?=$this->Form->control("readMessageFemale", ["label" => false, "value" => $points['readMessageFemale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">画像を送る</label>
                                    <?=$this->Form->control("sendImageFemale", ["label" => false, "value" => $points['sendImageFemale'], "type" => "number", "min" => "0", "step" => "1", "class" => "form-control"])?>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12" style='display:flex;'>
                                    <button  style="margin-left: auto" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>


                        
                        <?= $this->Form->end() ?>


                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>