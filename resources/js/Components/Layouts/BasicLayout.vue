<template>
    <div class="p-4 bg-teal-600">
        <div>header {{ randomId }}</div>
        <Link
            href="/basic-page-1"
        >
            Page 1
        </Link>
        <Link
            href="/basic-page-2"
        >
            Page 2
        </Link>
        <Link
            href="/basic-page-3"
        >
            Page 3
        </Link>
    </div>
    <div class="p-4 border-2 border-dashed">
        <p>content</p>
        <slot />
    </div>
    <div class="p-4 bg-amber-400">
        footer
    </div>
</template>

<script setup>

import {ref} from "vue";
import {Link} from "@inertiajs/vue3";

const randomId = ref(Math.random() * 1000);

</script>
