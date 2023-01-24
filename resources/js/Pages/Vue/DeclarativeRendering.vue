<template>
    <h1>{{ message }}</h1>
    <p>count is: {{ counter.count }}</p>

    <h1>{{ message.split('').reverse() }}</h1>
    <h1>{{ message.split('').reverse().join('') }}</h1>

    <!--    split() คือ ใช้สำหรับการแยกชุดตัวอักษรจากอักขระที่เราต้องการ
     join() ใช้สำหรับ การนำค่าแต่ละค่าในตัวแปร array มารวมกันเป็นข้อความ และส่งค่ากลับเป็นข้อความ
     ที่มีตัวคั่นค่าตัวแปรแต่ละค่าตามที่กำหนด ถ้าไม่ได้กำหนด จะเป็นเครื่องหมาย comma (,) ให้โดยอัตโนมัติ -->

</template>
<script setup>
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


</script>
