<template>
    <AdminLayout>
        <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 px-4">

                <div
                    class="bg-white relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded"
                >
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3
                            class="light font-semibold text-lg"
                        >
                            Manage Threads
                        </h3>
                        </div>
                    </div>
                    </div>
                    <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th
                            class="bg-blueGray-50 text-blueGray-500 px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                            Project
                            </th>
                            <th
                            class="bg-blueGray-50 text-blueGray-500 px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                            User
                            </th>
                            <th
                            class="bg-blueGray-50 text-blueGray-500 px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                            Status
                            </th>
                            <th
                            class="bg-blueGray-50 text-blueGray-500 px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            ></th>
                        </tr>
                        </thead>
                        <tbody>
                                                
                        <tr v-for="thread in threads.data" :key="thread.id">
                            <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                            >
                            <span
                                class="text-blueGray-600 ml-3 font-bold"
                            >
                                {{ thread.title }}
                            </span>
                            </th>

                            <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ thread.user.name }}
                            </td>

                            <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                            <i class="fas fa-circle mr-2" :class="{'text-green-500': thread.status=='active', 'text-red-500': thread.status=='inactive'}"></i> {{ thread.status}}
                            </td>
                            
                            <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                            >
                            <listing-dropdown :id="thread.id" />
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    </div>
                </div>
                <Pagination :links="threads.links" />

            </div>
        </div>
    </AdminLayout>
</template>
<script>
import AdminLayout from '@/layouts/Admin.vue';
import Pagination from "@/components/Shared/Pagination.vue";
import ListingDropdown from "@/components/Dropdowns/ThreadListingDropdown.vue";

export default {
  components: {
    AdminLayout,
    Pagination,
    ListingDropdown
  },

  props: {
    threads: {
      type: Object,
      required: true
    },
  },
};
</script>
