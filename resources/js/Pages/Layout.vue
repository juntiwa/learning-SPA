<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
const user = computed(() => usePage().props.auth.user)

</script>

<template>
    <main>
        <header>
            You are logged in as: {{ user.name }}
            <Link href="/logout" method="post" as="button" type="button" class="bg-rose-500 text-white rounded px-2 py-2">Logout</Link>

            <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message }}
            </div>
        </header>
        <div>
            <slot />
        </div>
    </main>
</template>
