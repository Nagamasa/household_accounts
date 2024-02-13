<script setup>
import { defineComponent } from 'vue';
import FormInput from '../components/atoms/FormInput.vue';

const components = defineComponent({
    components: {
        FormInput
    }
});

</script>

<template>
    <div>
        <form-input
            :label="'mail'"
        />
    </div>
    <div>
        <form-input
            :label="'パスワード'"
        />
    </div>
    <div>
        <input>
    </div>
</template>