<template>
    <div style="height: 538px; width: 1584px;
    margin-left: -35px; border-radius: 20px; margin-top: 40px; display: flex;
    background: rgba(253, 192, 64, 0.2)">
    <img style="position: absolute;" src="../assets/background.png" alt="">
        <div style="h_left">
            <div class="text_1">
                {{ text1 }}
            </div>
            <div class="text_2">
                {{ text2 }}
            </div>
            <div class="btn_input">
                <div class="input">
                    <img style="margin-right: 15px;" src="../assets/fi-rs-paper-plane.png" alt="">
                    {{ input }}
                </div>
                <div class="button">
                    {{ button }}
                </div>
            </div>
        </div>
        <div class="h_right">
            <img style="margin-left: -155px;" src="../assets/fresh-apples.png" alt="">
        </div>
    </div>
</template>

<script>
    import { useRoute,useRouter } from 'vue-router';    
    import {useProductStore} from '../store/StoreData'
    export default{
        setup(){
            const route = useRoute(); 
            const router = useRouter();
            const Categoryid = route.params.categoryId;
            //redirect to notfound if category id is bigger than what we have
            const myProductStore = useProductStore();
            if (0 > Categoryid > myProductStore.categoryProduct.length) {
                router.push('/NotFound');
            }
            else{
                // get specific category with id in the store cuz we dont need 10 of them and write query param all the time
                const Category = myProductStore.getCat(Number(Categoryid) - 1);
                return { Category };
            }
        },

        name: "MenuHeader",
        props:{
            img: String,
            img1: String,
            button: String,
            text1: String,
            text2: String,
            text3: String,
            input: String,
        }
        
    }
</script>
<style scoped>
    .h_left{
        float: left;
        display: flex;
        flex-direction: column;
    }
    .text_1{
        font-family: "Quicksand", sans-serif;
        font-size: 72px;
        width: 700px;
        color: #253D4E;
        margin: 90px 80px 30px 80px;
    }
    .text_2{
        font-family: "Lato", sans-serif;
        font-size: 30px;
        font-weight: 400;
        color: #7E7E7E;
        margin-left: 80px;
    }
    .btn_input{
        width: 442px;
        height: 50px;
        box-sizing: 30px;
        background: #fff;
        border-radius: 30px;
        display: flex;
        justify-content: space-between;
        margin-left: 80px;
        margin-top: 70px;
    }
    .input{
        font-family: "Lato";
        width: 400px;
        font-size: 12px;
        color: #B6B6B6;
        display: flex;
        align-items: center;
        margin-left: 22px;

    }
    .button{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 149px;
        height: 50px;
        border-radius: 30px;
        background: #3BB77E;
        margin-left: -200px;
        color: #fff;
    }
    .h_right{
        float: left;
        width: 895px;
        height: 597px;
        flex-shrink: 0;
    }
</style>