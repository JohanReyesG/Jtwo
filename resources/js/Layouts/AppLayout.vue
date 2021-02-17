<template>
  <div class="wrapper">
    <Header />
    <Aside />
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content" style="padding-top: 20px">
        <div class="container-fluid" style="">
          <!-- CONTENT-SECTION -->
          <main>
            <!-- CONTENT-FLUID -->
            <!-- Here: se cargan los contenidos spa XD -->
            <slot></slot>
          </main>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from "@/Pages/Layout/Header";
import Aside from "@/Pages/Layout/Aside";
import Footer from "@/Pages/Layout/Footer";

export default {
  components: {
    Header,
    Aside,
    Footer,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    };
  },

  methods: {
    switchToTeam(team) {
      this.$inertia.put(
        route("current-team.update"),
        {
          team_id: team.id,
        },
        {
          preserveState: false,
        }
      );
    },

    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>
