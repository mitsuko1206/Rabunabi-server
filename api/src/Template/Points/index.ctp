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
                    <?php 
                    $points = [
                        'initialPointsMale' => $pointsArr[0]['initialPoints'],
                        'sendMessageMale' => $pointsArr[0]['sendMessage'],
                        'readMessageMale' => $pointsArr[0]['readMessage'],
                        'sendImageMale' => $pointsArr[0]['sendImage'],
                        'initialPointsFemale' => $pointsArr[1]['initialPoints'],
                        'sendMessageFemale' => $pointsArr[1]['sendMessage'],
                        'readMessageFemale' => $pointsArr[1]['readMessage'],
                        'sendImageFemale' => $pointsArr[1]['sendImage'],
                    ];
                    $this->Form->create([]);?>
                    <div class="x_content">
                        <div>
                        <p>男性</p>
                            <br>


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