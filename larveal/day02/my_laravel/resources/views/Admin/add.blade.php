<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 19:25
 */
?>
<form action="addSave" method="post">{{ csrf_field() }}
    姓名:<input type="text" name="username"><br><br>
    密码:<input type="text" name="password"><br><br>
    <input type="submit" value="添加"><br><br>

</form>
