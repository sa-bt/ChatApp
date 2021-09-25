<template>
    <div class="h-full p-2 flex flex-col-reverse overflow-scroll">
        {{message.user.name}}: {{message.message}}
    </div>
</template>

<script>
    export default {
        name: "messageItem",
        props:['message']

    }
</script>

<style scoped>

</style>
