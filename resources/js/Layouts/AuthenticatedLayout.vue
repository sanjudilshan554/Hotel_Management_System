<script setup>
import { ref } from 'vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
      <ResponsiveNavLink :href="route('logout')" method="post" as="button" class="btn btn-danger">
          Log Out
       </ResponsiveNavLink> 
    </div>
</template>
