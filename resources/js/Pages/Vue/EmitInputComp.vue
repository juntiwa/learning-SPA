<template>
    form input : {{ form.input }}
    <FormInput
        label="input"
        name="input"
        v-model="form.input"
    />

    form checkbox : {{ form.checkbox }}
    <FormCheckbox
        name="checkbox"
        label="checkbox"
        v-model="form.checkbox"
    />

    <FormRadio
        :options="options"
        name="radio"
        v-model="form.radio"
    />

    <FormSelectOption
        v-model="form.select"
        :options="options"
    />
</template>

<script setup>

import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";
import FormInput from "../../Components/Controls/FormInput.vue";
import FormCheckbox from "../../Components/Controls/FormCheckbox.vue";
import FormSelectOption from "../../Components/Controls/FormSelectOption.vue";
import FormRadio from "../../Components/Controls/FormRadio.vue";

const form = useForm({
    input: null,
    checkbox: false,
    radio: null,
    select: null,
})

const options = ref([
    {name: 'book1', id: 1},
    {name: 'book2', id: 2},
    {name: 'book3', id: 3}
])
</script>
