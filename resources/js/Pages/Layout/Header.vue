<template>
  <div>
    <nav
      class="main-header navbar navbar-expand bg-white navbar-light border-bottom"
    >
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"
            ><i class="fa fa-bars"></i
          ></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-bell-o"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notificaciones</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-envelope mr-2"></i> 4 Mensajes
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-users mr-2"></i> 8 Usuarios
              <span class="float-right text-muted text-sm">12 horas</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-file mr-2"></i> 3 Reportes
              <span class="float-right text-muted text-sm">2 dias</span>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <li class="nav-item">
          <form method="POST" @submit.prevent="logout">
            <jet-responsive-nav-link as="button">
              Salir <i class="fa fa-sign-out"></i>
            </jet-responsive-nav-link>
          </form>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

export default {
  components: {
    JetResponsiveNavLink,
  },
  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>