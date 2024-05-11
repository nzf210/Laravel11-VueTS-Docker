<script setup lang="ts">
import Navbar from "./Navbar.vue";
import Sidebar from "./Sidebar.vue";
</script>

<template>
        <div class="antialiased bg-gray-50 dark:bg-gray-900">
            <Navbar/>
            <Sidebar/>
            <main class="p-4 md:ml-64 h-auto pt-20">
                <slot/>
            </main>
        </div>

</template>
