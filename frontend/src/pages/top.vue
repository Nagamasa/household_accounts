<script setup lang="ts">
import { ref } from 'vue'


const isSelectedExpense = ref(true)
const isSelectedIncome = ref(false)

function clickExpense() {
    isSelectedExpense.value = true;
    isSelectedIncome.value = false;
}

function clickIncome() {
    isSelectedExpense.value = false;
    isSelectedIncome.value = true;
}

</script>

<style lang="scss" scoped>

</style>

<template>
    <div class="p-8">
        <ul class="grid grid-flow-col text-center text-gray-500  p-1">
            <li>
                <a href="#expense" 
                    class="flex justify-center py-4"
                    :class="{ 'bg-white rounded-tl-lg rounded-tr-lg border-l border-t border-r border-gray-100' : isSelectedExpense }"
                    @click="clickExpense()"
                >
                    支出
                </a>
            </li>
            <li>
                <a 
                    href="#income"
                    class="flex justify-center py-4"
                    :class="{ 'bg-white rounded-tl-lg rounded-tr-lg border-l border-t border-r border-gray-100' : isSelectedIncome }"
                    @click="clickIncome()"
                >
                    収入
                </a>
            </li>
        </ul>
        <div class="bg-white shadow border border-gray-100 p-8 text-gray-700 rounded-lg -mt-2">
            Boxed content
        </div>
    </div>
</template>