<template>
  <div>
    <aside
      class="main-sidebar sidebar-dark-primary elevation-4"
      style="min-height: 578px"
    >
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img
          src=""
          alt=""
          class="brand-image img-circle elevation-3"
          style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">Jtwo</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              :src="$page.props.user.profile_photo_url"
              class="img-circle elevation-2"
              alt="User Image"
            />
          </div>
          <div class="info">
            <inertia-link
              :href="route('profile.show')"
              :active="route().current('profile.show')"
            >
              {{ $page.props.user.name }}
            </inertia-link>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul
            class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
          >
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  Dashboard
                  <span class="right badge badge-danger">Info</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  Link1
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-tree"></i>
                <p>
                  Link2
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/UI/general.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Vender</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/icons.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Reportes</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Link3
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Proveedores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Clientes</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  Reportes
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Reportes ventas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Reportes compras</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/simple.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Reportes clientes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Reportes proveedores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Reportes empleados</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Administracion</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-plus-square-o"></i>
                <p>
                  Sistema
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/404.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Errores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/500.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Estado</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Acerca de</li>
            <li class="nav-item">
              <a href="https://adminlte.io/docs" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>Manual</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://adminlte.io/docs" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>Soporte</p>
              </a>
            </li>
            <li class="nav-header">Opciones</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-primary"></i>
                <p class="text">Contacto</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>
</template>