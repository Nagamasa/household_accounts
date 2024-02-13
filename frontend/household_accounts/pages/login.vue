<script setup>
import { defineComponent } from 'vue';
import LoginForm from '../components/organisms/LoginForm.vue';

const components = defineComponent({
    components: {
        LoginForm
    }
});

</script>

<template>
    <LoginForm />
</template>