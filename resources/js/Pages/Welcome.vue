<template>
    <Layout>
        <Head title="Welcome" />
        <h1>Welcome</h1>
        <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
    </Layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import Layout from "./Layout";

defineProps({ user: Object })
</script>
