<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <main>
        <header class="bg-orange-300 p-2">
            <Link class="hover:text-rose-600" href="/declarativeRendering">Declarative Rendering</Link> |
            <Link class="hover:text-rose-600" href="/attributeBindings">Attribute Bindings</Link> |
            <Link class="hover:text-rose-600" href="/eventListeners">Event Listeners</Link> |
            <Link class="hover:text-rose-600" href="/formBindings">Form Bindings</Link> |
            <Link class="hover:text-rose-600" href="/conditionalRendering">Conditional Rendering</Link> |
            <Link class="hover:text-rose-600" href="/listRendering">List Rendering</Link> |
            <Link class="hover:text-rose-600" href="/computedProperty">Computed Property</Link> |
            <Link class="hover:text-rose-600" href="/lifeCycleAndTemplateRef">Lifecycle and Template Refs</Link> |
            <Link class="hover:text-rose-600" href="/watchers">Watchers</Link> |
        </header>
        <article class="p-2">
            <slot/>
        </article>
    </main>

</template>

<style>

</style>
