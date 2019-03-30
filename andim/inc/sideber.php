  <div class="aside">
    <div class="profile">
      <img class="avatar" src="/static/
uploads/avatar.jpg">
      <h3 class="name">布头儿</h3>
    </div>
    <ul class="nav"> 
      <li <?php echo $current_page ==='index'?'class="active"':'' ?>>
        <a href="/andim/index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <?php $menu_posts =array('posts','post-add','categories') ?>
      <li <?php echo in_array($current_page, $menu_posts)?'class="active"':'' ?>>
        <a href="/andim/#menu-posts" class="collapsed" data-toggle="collapse">
          <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-posts" class="collapse<?php echo in_array($current_page,$menu_posts)?'class=" in"':'' ?>">
          <li <?php echo $current_page ==='posts'?'class="active"':'' ?>><a href="/andim/posts.php">所有文章</a></li>
          <li <?php echo $current_page ==='post-add'?'class="active"':'' ?>><a href="/andim/post-add.php">写文章</a></li>
          <li <?php echo $current_page ==='categories'?'class="active"':'' ?>><a href="/andim/categories.php">分类目录</a></li>
        </ul>
      </li>
      <li <?php echo $current_page ==='comments'?'class="active"':'' ?>>
        <a href="/andim/comments.php"><i class="fa fa-comments"></i>评论</a>
      </li>
      <li <?php echo $current_page ==='users'?'class="active"':'' ?>>
        <a href="/andim/users.php"><i class="fa fa-users"></i>用户</a>
      </li>
      <?php $menu_settings =array('nav-menus','slides','settings') ?>
      <li <?php echo in_array($current_page, $menu_settings)?'class="active"':'' ?>>
        <a href="/andim/#menu-settings" class="collapsed" data-toggle="collapse">
          <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-settings" class="collapse<?php echo in_array($current_page,$menu-settings)?'class=" in"':'' ?>">
          <li <?php echo $current_page ==='nav-menus'?'class="active"':'' ?>><a href="/andim/nav-menus.php">导航菜单</a></li>
          <li <?php echo $current_page ==='slides'?'class="active"':'' ?>><a href="/andim/slides.php">图片轮播</a></li>
          <li <?php echo $current_page ==='settings'?'class="active"':'' ?>><a href="/andim/settings.php">网站设置</a></li>
        </ul>
      </li>
    </ul>
  </div>