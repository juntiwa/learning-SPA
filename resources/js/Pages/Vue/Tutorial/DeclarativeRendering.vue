<script setup>
import {reactive, ref} from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";

// component logic
// declare some reactive state here.
const counter = reactive({
    count: 0
})
counter.count++
const message = ref('Hello world!')

</script>

<template>
    <VueTutorial>
        Declarative Rendering
        <section>
            <b>Question</b>
            Now, try to create some reactive state yourself, and use it to render dynamic text content for the
            <CodeElement>&lt;h1&gt;</CodeElement>
            in the template.
        </section>
        <b>Answer</b>
        <h1>Make me dynamic!</h1>
        <h1>{{ message }}</h1>
        <p>Count is : {{ counter.count }}</p>
        <h1>{{ message.split('').reverse().join('') }}</h1>

        <section class="border-rose-500">
            <b>Note</b> <br>
            <CodeElement>message.split('').reverse().join('')</CodeElement><br>
            - split() คือ ใช้สำหรับการแยกชุดตัวอักษรจากอักขระที่เราต้องการ <br>
            - join() ใช้สำหรับ การนำค่าแต่ละค่าในตัวแปร array มารวมกันเป็นข้อความ และส่งค่ากลับเป็นข้อความ
            ที่มีตัวคั่นค่าตัวแปรแต่ละค่าตามที่กำหนด ถ้าไม่ได้กำหนด จะเป็นเครื่องหมาย comma (,) ให้โดยอัตโนมัติ
        </section>
    </VueTutorial>
</template>

<style>
code {
    color: #f43f5e;
}
section{
    border: 2px;
    border-style: dashed;
    padding: 0.5em;
    margin: 0.5em 0 0.5em;
}
</style>
