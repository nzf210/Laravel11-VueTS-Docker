<script setup lang="ts">
import AdminLayout from "@/Pages/Admin/Components/AdminLayout.vue";
import { initFlowbite } from "flowbite";
import { onMounted } from "vue";
// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();
});
// initialize components based on data attribute selectors
interface Props {
  admin: string;
}

defineProps<Props>();
</script>

<template>
    <AdminLayout>
    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
          <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
          ></div>
        </div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
        ></div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
        </div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
        ></div>
        <div class="grid grid-cols-2 gap-4">
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
          <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
          ></div>
        </div>
      </div>
    </AdminLayout>
</template>
