<template>
  <Layout>
    <div class="flex flex-wrap">
      <div class="w-full lg:w-6/12 px-4 mx-auto">
        <CardProfile />
      </div>
    </div>
  </Layout>
</template>
<script>
import CardProfile from "@/components/Cards/CardProfile.vue";
import Layout from "@/layouts/Admin.vue";

export default {
  components: {
    CardProfile,
    Layout
  },
};
</script>
