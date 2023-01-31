<template>
    <h1>Login</h1>
<!--    <input type="email" name="email" v-model="form.email" class="border border-slate-800 rounded mx-2 px-2 py-2"/>
    <input type="password" v-model="form.password" class="border border-slate-800 rounded mx-2 px-2 py-2"/>
    <button type="submit" @click="login" class="bg-teal-400 rounded px-2 py-2">login</button>-->



    <div>reactivity: {{ form.data() }}</div>

    <div class="grid grid-cols-2 gap-4">
        <FormInput
            name="email"
            label="Email :"
            type="email"
            v-model="form.email"
        />
        <FormInput
            name="password"
            type="password"
            label="Password :"
            v-model="form.password"
        />
    </div>
</template>
<script setup>
import {useForm} from "@inertiajs/vue3";
import FormInput from "../../Components/Controls/FormInput";
import {ref} from "vue";

const form = useForm({
    email: "test@example.com",
    password: null
})
const login = () => {
    form.post('/')
}

function onInput(event) {
    console.log(event.target.value);
    searchText.value = event.target.value;
}

const searchText = ref(null);
</script>
