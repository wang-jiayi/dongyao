<?php /*a:2:{s:66:"/www/wwwroot/manong.yaho.cc/application/store/view/toup/price.html";i:1546941855;s:70:"/www/wwwroot/manong.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap">

<!--<?php if(auth("$classuri/add")): ?>-->
<!-- <button data-modal='<?php echo url("@$classuri/add"); ?>' data-title="添加链接" class='layui-btn layui-btn-sm layui-btn-primary'>添加链接</button> -->
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/del")): ?>-->
<button data-update="" data-field='delete' data-action='<?php echo url("$classuri/del"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>删除链接</button>
<!--<?php endif; ?>-->

</div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">

<!-- 表单搜索 开始 -->
<form autocomplete="off" class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get">

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">用户名称</label>
        <div class="layui-input-inline">
            <input name="username" value="<?php echo htmlentities(app('request')->get('username')); ?>" placeholder="请输入用户名称" class="layui-input">
        </div>
    </div>

   

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">时间</label>
        <div class="layui-input-inline">
            <input name="addtime" id="addtime" value="<?php echo htmlentities(app('request')->get('addtime')); ?>" placeholder="请选择添加时间" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button>
    </div>

</form>

<script>
    window.laydate.render({range: true, elem: '#addtime'});
    window.form.render();
</script>
<!-- 表单搜索 结束 -->

<form onsubmit="return false;" data-auto="true" method="post">
    <?php if(empty($list)): ?>
    <p class="help-block text-center well">没 有 记 录 哦！</p>
    <?php else: ?>
    <input type="hidden" value="resort" name="action"/>
    <table class="layui-table" lay-skin="line">
        <thead>
        <tr>
            <th class='list-table-check-td think-checkbox'>
                <input data-auto-none="none" data-check-target='.list-check-box' type='checkbox'/>
            </th>
            <th class='text-left nowrap'>用户名称</th>
            <th class='text-left nowrap'>用户头像</th>
            <th class='text-left nowrap'>充值时间</th>
            <th class='text-left nowrap'>充值积分</th>
            <th class='text-left'>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $key=>$vo): ?>
        <tr>
            <td class='list-table-check-td think-checkbox'>
                <input class="list-check-box" value='<?php echo htmlentities($vo['id']); ?>' type='checkbox'/>
            </td>
           
            <td class='text-left nowrap'><?php echo htmlentities($vo['username']); ?></td>
            <td class='text-left nowrap'><img src="<?php echo htmlentities($vo['userpic']); ?>" style="width:60px;height:40px;"></td>
            <td class='text-left nowrap'><?php echo htmlentities($vo['addtime']); ?></td>
            <td class='text-left nowrap'>
               <?php echo htmlentities($vo['price']); ?>分
            </td>
            <td class='text-left nowrap'>

                <?php if(auth("$classuri/del")): ?>
                <span class="text-explode">|</span>
                <a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='delete' data-action='<?php echo url("$classuri/del"); ?>'>删除</a>
                <?php endif; ?>

            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; endif; ?>
</form>
</div>
</div>

<!-- 右则内容区域 结束 -->