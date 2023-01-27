<script setup>
import {onMounted, ref, watch} from "vue";
import VueTutorial from "../../../Components/Layouts/VueTutorial";

const input = ref(null);

const login = ref(null);
const fourDigits = ref(null);
const cb = (value) => {
    if (value?.length === 4) {
        fourDigits.value = value;
    } else {
        fourDigits.value = null;

    }
}

watch(
    () => login.value,
    cb,
);


// input.value.focus();
// setTimeout(() => input.value.focus(), 3000);

onMounted(() => {
    input.value.focus();
});

</script>
<template>
    <VueTutorial>
        <input class="border-2" ref="input" v-model="login"/>
        <p>{{ fourDigits }}</p>
    </VueTutorial>
</template>


