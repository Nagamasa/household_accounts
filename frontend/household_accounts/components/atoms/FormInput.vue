<script setup lang="ts">
import { ref } from 'vue';

const props = defineProps({
    label: { type: String, required: true}
})


</script>

<template>
    <div>
        {{ props.label }}: <input>
    </div>
</template>