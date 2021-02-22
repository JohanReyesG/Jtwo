<template>
  <app-layout>
    <link href="../../../css/app.css" rel="stylesheet" />

    <link
      href="../../../admin_assets/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link href="../../../admin_assets/css/adminlte.css" rel="stylesheet" />
    <link
      href="../../../admin_assets/css/ionicons.min.css"
      rel="stylesheet"
    />
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <welcome />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";

export default {
  components: {
    AppLayout,
    Welcome,
  },
};
</script>
