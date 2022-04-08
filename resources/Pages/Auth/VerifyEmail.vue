<template>
  <Layout>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-6/12 px-4">
        <div
          class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
        >
          <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
              <h6 class="text-blueGray-500 text-sm font-bold">
                Email Verification
              </h6>
            </div>

            <hr class="mt-6 border-b-1 border-blueGray-300" />
          </div>
          <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
            <div class="mb-3" v-if="status">
              <Alert type="success" :message="status" />
            </div>
            <div class="mb-3">
              <p class="text-blueGray-600 text-sm">
                Please check your email to verify your account.
              </p>
            </div>
            <form @submit.prevent="form.post('/email/verification-notification')">
              <div class="text-center mt-6">
                <button
                  class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                  type="submit"
                >
                  Resend Verification Email
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </Layout>
</template>
<script>
import Layout from "@/layouts/Auth.vue";
import Alert from "@/components/Alert/Alert.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Layout,
    Link,
    Alert
  },
  props: {
    status: {
      type: String,
      default: null
    }
  },
  setup() {
    const form = useForm();

    return {
      form
    }
  }
};
</script>
