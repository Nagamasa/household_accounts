<script setup>
import { defineComponent } from 'vue';
import LoginForm from '@/components/organisms/LoginForm.vue';
</script>

<style scoped>
.main-content {
    display: flex;
    justify-content: center;
    padding-top: 200px;
}
</style>

<template>
    <div class="main-content">
        <LoginForm />
    </div>
</template>