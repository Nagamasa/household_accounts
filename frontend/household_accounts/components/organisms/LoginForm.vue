<script setup lang="ts">
import FormInput from '../atoms/FormInput.vue';
import PrimaryButton from '../atoms/PrimaryButton.vue';

const props = defineProps({
    label: { type: String, required: true}
})

const components = defineComponent({
    components: {
        FormInput,
        PrimaryButton
    }
});

</script>

<template>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <form-input
                    :label="'Username'"
                />
            </div>
            <div class="mb-6">
                <form-input
                    :label="'Password'"
                />
            </div>
            <div class="flex items-center justify-between">
                <primary-button
                    :label="'Sign In'"
                />
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</template>