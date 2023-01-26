<script setup>
// Declarative Rendering
//reactive
import {reactive} from 'vue'

const counter = reactive({
    count: 0
})

console.log(counter.count) // 0
counter.count++
console.log(counter.count) // 1

//ref
import {ref} from 'vue'

const message = ref('Hello World!')

console.log(message.value) // "Hello World!"
// message.value = 'Changed'
console.log(message.value) // "Changed"

// Attribute Bindings

const titleClass = ref('title')

//Event Listeners
const count = ref(0)
const i = ref(0)
const buttonFuntion = ref('button')
const buttonI = ref('button')

const incrementI = () => {
    i.value++
}

function increment() {
    count.value++
}
</script>

<template>

    Declarative Rendering
    <h1>{{ message }}</h1>
    <p>count is: {{ counter.count }}</p>

    <h1>{{ message.split('').reverse() }}</h1>
    <h1>{{ message.split('').reverse().join('') }}</h1>

    <!--    split() คือ ใช้สำหรับการแยกชุดตัวอักษรจากอักขระที่เราต้องการ
     join() ใช้สำหรับ การนำค่าแต่ละค่าในตัวแปร array มารวมกันเป็นข้อความ และส่งค่ากลับเป็นข้อความ
     ที่มีตัวคั่นค่าตัวแปรแต่ละค่าตามที่กำหนด ถ้าไม่ได้กำหนด จะเป็นเครื่องหมาย comma (,) ให้โดยอัตโนมัติ -->


    <!-- Now, try to add a dynamic class binding to the <h1>, using the titleClass ref as its value.
    If it's bound correctly, the text should turn red.  -->
    Attribute Bindings
    <h1 :class="titleClass">Make me red</h1> <!-- add dynamic class binding here -->


    Event Listeners
    Now, try to implement the increment function yourself and bind it to the button using v-on.
    <!-- make this button work -->
    <button :class="buttonFuntion" @click="increment">count is: {{ count }}</button>
    <button :class="buttonI" @click="incrementI">i is: {{ i }}</button>
</template>

<style>
.title {
    color: red;
}
</style>
