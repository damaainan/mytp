{extend name="include/base" /} 
{block name="title"}user 列表页{/block} 
{block name="content"}
<h2>user list</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">用户名</th>
            <th scope="col">登录IP</th>
            <th scope="col">最后登陆时间</th>
        </tr>
    </thead>
    <tbody>
        {foreach $list as $key=>$vo } 
        <tr>
            <th scope="row">{$vo.id}</th>
            <td>{$vo.username}</td>
            <td>{$vo.last_login_ip}</td>
            <td>{$vo.last_login_time}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
{$page|raw}
{/block}