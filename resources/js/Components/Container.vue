<script setup></script>

<template>
    <div class="container">
        <slot />
    </div>
</template>

<style scoped>
.container {
    background-color: var(--bg-color, white);
    margin: 0 auto;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid var(--border-color, #e2e8f0);
}

.container:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 10px rgba(0, 0, 0, 0.15);
}

:root {
    --bg-color: white;
    --border-color: #e2e8f0;
}

.dark .container {
    --bg-color: #1e293b;
    --border-color: #334155;
}
</style>
