<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 10:52
 */

?>
<script src="/static/jquery-3.2.1.min.js"></script>
<script>



        function add(data) {
           list=  $(data).serializeArray();

          $.post("<?=\yii\helpers\Url::to(['find'])?>",list,function (r) {
            alert('添加成功');
            window.location.href("<?=\yii\helpers\Url::to(['index'])?>")
          });
            return false;
        }

</script>
<form  method="post" onsubmit="return add(this)">
    内容:<textarea name="count">
        </textarea>
   <input type="submit" value="发布">
</form>

<?php foreach($data as $v):?>
    <div class="for">
        <p>
            <span class="span1"><?=Html::encode($v['user_id'])?></span>
            <span><?=Html::encode($v['create_time'])?></span>
        </p>
        <p><?=Html::encode($v['con'])?></p>
        <a href="<?=Url::to(['delete','id'=>$v['id']])?>">删除</a>
    </div>
<?php endforeach;?>




