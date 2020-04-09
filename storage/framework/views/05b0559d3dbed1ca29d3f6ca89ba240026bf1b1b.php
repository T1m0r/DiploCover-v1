<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="<?php echo e(backpack_url('dashboard')); ?>"><i class="fa fa-dashboard"></i> <span><?php echo e(trans('backpack::base.dashboard')); ?></span></a></li>
<li><a href="<?php echo e(backpack_url('elfinder')); ?>"><i class="fa fa-files-o"></i> <span><?php echo e(trans('backpack::crud.file_manager')); ?></span></a></li>
<li><a href='<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/backup')); ?>'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>
<li><a href='<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/log')); ?>'><i class='fa fa-terminal'></i> <span>Logs</span></a></li>
<li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/menu-item')); ?>"><i class="fa fa-list"></i> <span>Menu</span></a></li>
<!---USER Managment ---->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='<?php echo e(backpack_url('school')); ?>'><i class='fa fa-tag'></i> <span>Schools</span></a></li>
        <li><a href='<?php echo e(backpack_url('teacher')); ?>'><i class='fa fa-tag'></i> <span>Teachers</span></a></li>
        <li><a href='<?php echo e(backpack_url('student')); ?>'><i class='fa fa-tag'></i> <span>Students</span></a></li>
        <li><a href='<?php echo e(backpack_url('company')); ?>'><i class='fa fa-tag'></i> <span>Companies</span></a></li>
        <li><a href='<?php echo e(backpack_url('employee')); ?>'><i class='fa fa-tag'></i> <span>Employees</span></a></li>

    </ul>
</li>

<!---Entity Managment ---->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Other</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href='<?php echo e(backpack_url('admin')); ?>'><i class='fa fa-tag'></i> <span>Admin</span></a></li>
        <li><a href='<?php echo e(backpack_url('da')); ?>'><i class='fa fa-tag'></i> <span>DAs</span></a></li>
        <li><a href='<?php echo e(backpack_url('grade')); ?>'><i class='fa fa-tag'></i> <span>Grades</span></a></li>
        <li><a href='<?php echo e(backpack_url('idea')); ?>'><i class='fa fa-tag'></i> <span>Ideas</span></a></li>
        <li><a href='<?php echo e(backpack_url('intresst')); ?>'><i class='fa fa-tag'></i> <span>Intressts</span></a></li>
        <li><a href='<?php echo e(backpack_url('team')); ?>'><i class='fa fa-tag'></i> <span>Teams</span></a></li>

    </ul>
</li>

<!-- Users, Roles Permissions -->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="<?php echo e(backpack_url('user')); ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="<?php echo e(backpack_url('role')); ?>"><i class="fa fa-group"></i> <span>Roles</span></a></li>
        <li><a href="<?php echo e(backpack_url('permission')); ?>"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/language')); ?>"><i class="fa fa-flag-checkered"></i> Languages</a></li>
        <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/language/texts')); ?>"><i class="fa fa-language"></i> Site texts</a></li>
    </ul>
</li>



