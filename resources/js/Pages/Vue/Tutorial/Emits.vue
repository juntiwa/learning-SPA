<script setup>
import {ref, watch} from 'vue'
import VueTutorial from "../../../Components/Layouts/VueTutorial"
import EmitComp from "../../../Components/EmitComp"
import InputElement from "../../../Components/Element/InputElement"

const childMsg = ref('No child msg yet')
const text = ref(null)
watch(
    () => text.value,
    (val) => {
        if (val) {
            console.log(text.value)
        }
    }
)
</script>

<template>
    <VueTutorial>
        <EmitComp @response="(msg) => childMsg = msg"/>
        <p>{{ childMsg }}</p>

        <InputElement @custom-change="(txt) => text = txt"/>
        <InputElement v-model="text"/>
        {{ text }}
    </VueTutorial>
</template>

<style scoped>

</style>
