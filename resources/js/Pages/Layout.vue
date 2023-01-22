<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const user = computed(() => usePage().props.auth.user)
</script>

<template>
    <main>
        <header>
            You are logged in as: {{ user.name }}
            <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message }}
            </div>
        </header>
        <div>
            <slot />
        </div>
    </main>
</template>
