<?php 
    $user = (new yii\db\Query())->select('*')->from('user')->where('id=:id', [':id'=>$model->user_id])->one();
?>
<div class="media"> 
    <div class="media-left"> 
        <a href="#"> 
            <img alt="64x64" class="media-object img img-circle" data-src="holder.js/64x64" 
                 src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNjk5MjM3NWZlYiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2OTkyMzc1ZmViIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi44MDQ2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 40px; height: 40px;"> </a> 
    </div>
    <div class="media-body"> 
        <div class="media-heading">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <?= $user['username']; ?> 
                </div> 
                <div class="col-md-3 col-sm-3 col-xs-3 text-right" style="font-size: 8px">
                    <i class="glyphicon glyphicon-calendar"></i> <?= $model->date; ?>
                </div>
            </div> 
        </div> 
        <?= $model->message; ?>
    </div> 
</div>
<br>