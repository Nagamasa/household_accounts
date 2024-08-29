<style scoped>
.header-content {
    border: solid;
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
        <footer>
            <p>My Site footer</p>
        </footer>
    </div>
</template>