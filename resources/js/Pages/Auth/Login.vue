<template>
    <h1>Login</h1>
    <input type="email" name="email" v-model="form.email" class="border border-slate-800 rounded mx-2 px-2 py-2"/>
    <input type="password" v-model="form.password" class="border border-slate-800 rounded mx-2 px-2 py-2"/>
    <button type="submit" @click="login" class="bg-teal-400 rounded px-2 py-2">login</button>
</template>
<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    email: "test@example.com",
    password: null
})
const login = () => {
    form.post('/')
}
</script>
