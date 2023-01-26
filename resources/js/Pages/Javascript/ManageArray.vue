<script setup>
const arr = [1, 2, 3, 4, 5]

const multiplyByTwo = arr.map(value => {
    return value * 2 // return ค่า value คูณ 2
})

const evenNumbers = arr.filter(value => {
    return value % 2 === 0 // return ค่า value ที่หาร 2 แล้วเศษเท่ากับ 0
})

const totalValue = arr.reduce((total, curr) => {
    return total + curr //return ค่า total + curr ออกมา
}, 0) //มีค่าเริ่มต้น = 0

const reduceAsMap = arr.reduce((total, curr) => {
    const multipleByTwo = curr * 2 // นำค่า current มาคูณ 2
    return [...total, multipleByTwo] //return โดยการต่อ array ค่า total และ ค่า multipleByTwo
}, [])

const reduceAsFilter = arr.reduce((total, curr) => {
    const evenNumber = curr % 2 === 0 // นำค่า current หาร 2 แล้วตรวจสอบว่าเศษเท่ากับ 0 หรือไม่ โดยจะได้ค่าเป็น true กับ false
    //นำค่ามา check ว่าเป็น true หรือไม่
    if (evenNumber) {
        //ถ้าใช่ให้ทำการต่อ array ค่า total และ ค่า current
        return [...total, curr]
    }
    //หลังจากนั้นให้ return ค่าทั้งหมดที่ตรงเงื่อนไขออกมา
    return [...total]
}, [])

const multipleByThree = evenNumbers.map(value => {
    return value * 3
})

const totalValueMultipleByThree = multipleByThree.reduce((total, value) => {
    return total + value
}, 0)
</script>

<template>
    <div class="mx-1">
        ตัวอย่างการใช้งาน map filter และ reduce
        <p> {{ arr }} </p>
        <div class="border-dashed border-2 border-slate-500 my-2 p-2">
            <p class="text-rose-600"> map multiplyByTwo : นำค่า arr มาคูณ 2 โดยใช้ map {{ multiplyByTwo }} </p>
            <p class="text-rose-600"> reduceAsMap : นำ reduce มาใช้ร่วมกับ map โดยนำค่ามาคูณ 2 จะได้ {{ reduceAsMap }}
                ซึ่งเห็นได้ว่าผลลัพธ์ที่ออกมามีค่าเหมือนกัน </p>
        </div>

        <div class="border-dashed border-2 border-slate-500 my-2 p-2">
            <p class="text-teal-600"> filter evenNumbers : นำค่า arr มาตรวจสอบว่าค่าใดบ้าง เมื่อหาร 2
                แล้วที่มีเศษเท่ากับ 0
                โดยใช้ filter
                {{ evenNumbers }}</p>
            <p class="text-teal-600"> reduceAsFilter : นำ reduce มาใช้ร่วมกับ filter โดยนำค่าหาร 2
                แล้วเก็บเฉพาะค่าที่มีเศษเท่ากับ 0 {{ reduceAsFilter }}</p>
        </div>

        <div class="border-dashed border-2 border-slate-500 my-2 p-2">
            <p class="text-violet-600"> reduce totalValue : นำค่า arr มาหาผลรวม โดยใช้ reduce {{ totalValue }}</p>
        </div>

        <div class="border-dashed border-2 border-slate-500 my-2 p-2">
            <p> multipleByThree : นำค่า evenNumbers มา map แล้วคูณ 3 {{ multipleByThree }}</p>
            <p> totalValueMultipleByThree : นำค่า multipleByThree มาหาผลรวม โดยใช้ reduce {{
                    totalValueMultipleByThree
                }}</p>
        </div>
    </div>

</template>
