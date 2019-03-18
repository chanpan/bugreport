<div class="panel panel-primary">
    <div class="panel-body" style="padding: 15px;background: #337ab7;color: #fff;">
        <h3><?= $model->title; ?></h3>
        <div>
            <?= $model->detail; ?>
        </div>
        <div>
            <?php 
                $storage = \Yii::$app->params['storageUrl'];
            ?>
        </div>
    </div>
</div>

<hr>
<div id="view-message"></div>
<div>
    <div>
        <textarea class="form-control" rows="3" id="txt-message" placeholder="Message"></textarea><br>
    </div>
    <div class="text-right">
        <button class="btn btn-success" id="btn-post-message"><i class="glyphicon glyphicon-comment"></i> Post</button>
    </div>
</div>
 
<?php 
    $this->registerJs("
        function load_message(){
            let id = '".$id."';
            let url = '".\yii\helpers\Url::to(['/bug-report/message', 'id'=>$id])."';
            $.get(url, function(data){
                $('#view-message').html(data);
            });    
        }
        setInterval(function(){
            load_message();
        },1500); 
        
        $('#btn-post-message').on('click',function(){
            let message = $('#txt-message').val();
            let b_id = '".$id."';
            let params = {message:message, b_id:b_id};
            save_message(params);
            return false;
        });
        
        function save_message(params){
            let url = '".yii\helpers\Url::to(['/bug-report/save-message'])."';
            $.post(url, params, function(res){
                console.log(res);
                //location.reload();
            });
        }

    ");
?>