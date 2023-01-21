<template>
    <main>
        <header>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/contact">Contact</Link>
            <div>
                <iframe
                    width="full"
                    frameborder="none"
                    scrolling="none"
                    seamless
                    src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"
                />
            </div>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>


<script setup>
import { Link } from '@inertiajs/vue3'
</script>
