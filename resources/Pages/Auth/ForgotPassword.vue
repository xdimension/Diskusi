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
                Request Password Reset
              </h6>
            </div>

            <hr class="mt-6 border-b-1 border-blueGray-300" />
          </div>
          <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
            <div class="mb-3" v-if="status">
              <Alert type="success" :message="status" />
            </div>
            <form @submit.prevent="form.post('/forgot-password')">
              <div class="relative w-full mb-3">
                <label
                  class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                  htmlFor="grid-password"
                >
                  Email
                </label>
                <input
                  type="email"
                  class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                  placeholder="Email"
                  v-model="form.email"
                />
                <div class="text-red-500 text-sm" v-if="form.errors.email">{{ form.errors.email }}</div>
              </div>
              <div class="text-center mt-6">
                <button
                  class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                  type="submit"
                >
                  Email Password Reset
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
    const form = useForm({
      email: '',
    });

    return {
      form
    }
  }
};
</script>
