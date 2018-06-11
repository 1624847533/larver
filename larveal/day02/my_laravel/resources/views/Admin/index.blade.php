<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 8:08
 */
?>
<a href="add">添加</a>
<table border="1" cellspacing="0">
    <tr>
        <td>uid</td>
        <td>username</td>
        <td>password</td>
        <td>create_time</td>
        <td>updated_time</td>
        <td>操作</td>
    </tr>
   @foreach($list as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td><?php echo $v->username?></td>
            <td><?php echo $v->password?></td>
            <td>{{$v->create_at}}}</td>
            <td>{{$v->update_at}}}</td>
            <td>
                <a href="update?id=<?php echo $v->id?>">修改</a>
                <a href="delete?id=<?php echo $v->id?>">删除</a>
            </td>
        </tr>
   @endforeach

</table>
