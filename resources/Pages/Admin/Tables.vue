<template>
  <AdminLayout>
    <div class="flex flex-wrap mt-4">
      <div class="w-full mb-12 px-4">
        <card-table />
      </div>
      <div class="w-full mb-12 px-4">
        <card-table color="dark" />
      </div>
    </div>
  </AdminLayout>
</template>
<script>
import CardTable from "@/components/Cards/CardTable.vue";
import AdminLayout from "@/layouts/Admin.vue";

export default {
  components: {
    CardTable,
    AdminLayout
  },
};
</script>
