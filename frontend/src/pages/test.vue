<script setup>
let sasyoData = {
    date: '2024-02-01',
    message: '',
    sagyoList: [
        {
            id: 1,
            time: '0:00'
        },
        {
            id: 2,
            time: '0:00'
        }
    ]
}

let addSagyoList = [
    {
        id: 1,
        time: '0:00'
    },
    {
        id: 2,
        time: '4:00'
    },
    {
        id: 3,
        time: '2:00'
    },
]

addSagyoList.forEach(addSagyo => {
    let index = sasyoData.sagyoList.findIndex(sagyo => sagyo.id === addSagyo.id);

    if (index === -1) {
        sasyoData.sagyoList.push(addSagyo);
    } else {
        sasyoData.sagyoList[index].time = addSagyo.time;
    }
});

console.log(sasyoData.sagyoList);

</script>
<template>
    a
</template>