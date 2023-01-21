<template>
    <h1>Contact</h1>
    <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
</template>

<script setup>
defineProps({ user: Object })
</script>

<script>
import Layout from './Layout'

export default {
    // Using a render function...
    // layout: (h, page) => h(Layout, [page]),

    // Using shorthand syntax...
    // layout: Layout,
}
</script>



