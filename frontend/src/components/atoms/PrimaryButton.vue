<script setup lang="ts">

const props = defineProps({
    label: { type: String, required: true }
});
</script>

<template>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        {{ label }}
    </button>
</template>