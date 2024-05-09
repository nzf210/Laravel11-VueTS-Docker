<script setup lang="ts">
import Navbar from "./Navbar.vue";
import Sidebar from "./Sidebar.vue";

</script>

<template>
        <div class="antialiased bg-gray-50 dark:bg-gray-900">
            <Navbar/>
            <Sidebar/>
            <slot></slot>
        </div>

</template>
