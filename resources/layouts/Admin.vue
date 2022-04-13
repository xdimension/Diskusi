<template>
  <div>
    <sidebar />
    <div class="relative md:ml-64 bg-blueGray-100">
      <admin-navbar />
        <div class="relative bg-emerald-600 md:pt-32 pb-32 pt-12">
          <div class="relative px-4 md:px-10 mx-auto w-full -m-24 md:pt-32 pb-32 pt-12">
            <slot/>
            <footer-admin />
          </div>
      </div>
    </div>
  </div>
</template>
<script>
import AdminNavbar from "@/components/Navbars/AdminNavbar.vue";
import Sidebar from "@/components/Sidebar/Sidebar.vue";
import FooterAdmin from "@/components/Footers/FooterAdmin.vue";
import HeaderStats from '@/components/Headers/HeaderStats.vue';

export default {
  name: "admin-layout",
  components: {
    AdminNavbar,
    Sidebar,
    HeaderStats,
    FooterAdmin,
  },
};
</script>
