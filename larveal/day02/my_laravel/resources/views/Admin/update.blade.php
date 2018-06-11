<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/9
 * Time: 13:38
 */
?>
<form action="save" method="post">{{ csrf_field()}}
    <input type="hidden" name="id" value="{{$list->id}}">
    姓名:<input type="text" name="username" value="{{$list->username}}"><br><br>
    密码:<input type="text" name="password" value="{{$list->password}}"><br><br>
    <input type="submit" value="修改"><br><br>

</form>
