<template>
    <div class="relative h-10 m-1">
        <div class="grid grid-cols-6" style="border-top:1px solid #e6e6e6">
            <input
                type="text"
                v-model="message"
                @keyup.enter="sendMessage()"
                placeholder="Say something..."
                class="col-span-5 outline-none p-1"
            >
            <button
                class="place-self-end bg-gray-500 hover:bg-blue-700 mt-1 rounded text-white"
                @click="sendMessage()">
                Send
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "inputMessage",
        props: {
            room: {
                required: true,
                type: Object
            }
        },
        data() {
            return {
                message: ''
            }
        },
        methods: {
            sendMessage(){
                if (this.message==' '){
                    return;
                }
                axios.post('chat/room/'+this.room.id+'/message',{
                    message:this.message
                })
                    .then(response=>{
                        this.message='';
                        this.$emit('messageSend')
                    })
                    .catch(error=>{
                        console.log(error)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
