<template>
    <div class="h-96 w-full">

            <message-item v-for="(message,index) in messages"
                          :key="index"
                          :message="message" />
    </div>
</template>

<script>
    import MessageItem from "@/Pages/Chat/messageItem";
    export default {
        name: "messageContainer",
        components: {MessageItem},
        props:{
            messages:{
                required:true,
                type:Object
            }
        }
    }
</script>

<style scoped>

</style>
