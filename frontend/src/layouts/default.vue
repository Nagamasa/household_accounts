<style scoped>
.header-content {
    border: solid;
    border-color: #00DC81;
    background-color: #00DC82;
    color: #fff;
}

.header-text {
    font-size: 2rem;
}
</style>
<template>
    <div>
        <header>
            <div class="header-content">
                <h1 class="header-text">household account</h1>               
            </div>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>