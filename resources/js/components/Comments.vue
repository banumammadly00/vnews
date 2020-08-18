<template>

    <div>
        <div class="comment-text">
            <input type="text" name="comment" v-model="comment.body" placeholder="Comment here..."
                   style="height: 120%; border-radius: 12px; padding:2%;">
        </div>
        <div>
            <button type="submit" name="submit" class="comment-button">comment </button>
        </div>

    </div>
</template>

<script>
    export default {

        props: ['csrf'],

        mounted(){
            console.log('tested')
        },

        data() {
            return {
                id: '',
                comment: {
                    body: ''
                },
                // viewcomments: ''
            }
        },
        methods: {
            store() {
                this.comment.push(this.comment.body)
             return   this.comment.body
              console.log('test');
            }
        }

    }
</script>