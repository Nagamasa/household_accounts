<script setup>
    import SlotTest from '@/components/molecules/SlotTest.vue';

    const items = ref(['アイテム 1', 'アイテム 2', 'アイテム 3']);
</script>
<template>
    <SlotTest>
        <template v-for="(item, index) in items" : key="index">
            <div>{{ item }}</div>
        </template>
    </SlotTest>
</template>