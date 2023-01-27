<template>
    <button @click="$emit('someEvent')">
        <slot></slot>
    </button>

</template>

<script>
export default {
    name: "ButtonElement"
}
</script>

<style scoped>

</style>
