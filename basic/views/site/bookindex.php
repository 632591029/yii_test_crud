<?php

/* @var $this yii\web\View */

$this->title = 'My Book ';
?>
<div class="site-bookindex">

   

    <div class="body-content">
    <div class="row">
            <div class="col-lg-9">
                名称
            </div>
            <div class="col-lg-3">
                <p><a href="" class="btn btn-default">操作</a></p>
               
                
            </div>
            
        </div>  
        <?php foreach($list as $list): ?>
        <div class="row" >
        
            <div class="col-lg-9">
            
            </div>
            <div class="col-lg-3">
                <p><a href="" class="btn btn-danger">删除</a></p>
                <p><a href="" class="btn btn-success">新增</a></p>
                
            </div>
            
        </div>
        <?php endforeach; ?>
    </div>
</div>
