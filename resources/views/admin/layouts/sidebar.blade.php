<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
    </form>
    <ul class="nav menu">
      <li class="{{ (Request::is('admin') ? 'active' : '') }}">
        <a href="/admin">
          <svg class="glyph stroked dashboard-dial">
            <use xlink:href="#stroked-dashboard-dial"></use>
          </svg>
          Tổng quan
        </a>
      </li>
      <li class="{{ (Request::is('admin/categories/*') || Request::is('admin/categories') ? 'active' : '') }}">
        <a href="/admin/categories">
          <svg class="glyph stroked clipboard with paper">
            <use xlink:href="#stroked-clipboard-with-paper" />
          </svg>
          Danh Mục
        </a>
      </li>
      <li class="{{ (Request::is('admin/products/*') || Request::is('admin/products') ? 'active' : '') }}">
        <a href="/admin/products">
          <svg class="glyph stroked bag">
            <use xlink:href="#stroked-bag"></use>
          </svg>
          Sản phẩm
        </a>
      </li>
      <li class="{{ (Request::is('admin/orders/*') || Request::is('admin/orders') ? 'active' : '') }}">
        <a href="/admin/orders">
          <svg class="glyph stroked notepad ">
            <use xlink:href="#stroked-notepad" />
          </svg>
          Đơn hàng
        </a>
      </li>
      <li role="presentation" class="divider"></li>
      <li class="{{ (Request::is('admin/users/*') || Request::is('admin/users') ? 'active' : '') }}">
        <a href="/admin/users">
          <svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use>
          </svg>
          Quản lý thành viên
        </a>
      </li>
    </ul>
</div>