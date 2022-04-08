<template>
  <div v-if="alertOpen" class="text-white px-6 py-4 border-0 rounded relative mb-4" :class="typeClass">
    <span class="text-xl inline-block mr-5 align-middle">
      <i class="fa" :class="alertIcon"></i>
    </span>
    <span class="inline-block align-middle mr-8">
      {{ message }}
    </span>
    <button v-if="canClose" @click="closeAlert()" class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
      <span>×</span>
    </button>
  </div>
</template>

<script>
export default {
  name: "alert",
  props: {
    type: {
      type: String,
      default: 'success'
    },
    icon: {
        type: String,
        default: ''
    },
    message: {
        type: String,
        default: ''
    },
    canClose: {
        type: Boolean,
        default: false
    }
  },
  data() {
    return {
      alertOpen: true
    }
  },
  computed: {
    alertIcon() {
        if (this.icon != '') {
            return this.icon;
        }

        switch(this.type) {
            case 'success':
                return 'fa-check';
            case 'warning':
                return 'fa-exclamation';
            case 'error':
                return 'fa-exclamation';       
            default:
                return 'fa-info';
        }
    },
    typeClass() {
        switch (this.type) {
            case 'info':
                return 'bg-blue-100 text-blue-600';
            case 'error':
                return 'bg-red-500';
            case 'warning':
                return 'bg-yellow-500';
            default:
                return 'bg-green-500';
        }
    }
  },
  methods: {
    closeAlert() {
        this.alertOpen = false;
    }
  }
}
</script>