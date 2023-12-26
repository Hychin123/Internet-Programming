<template>
    
            <div class="_promotion" :style="{
                backgroundColor: pro_bg,
            }">
                <div class="_quote">
                    <div class="_text">{{text}}</div>
                </div>
                <div class="_img">
                    <img :src=img
                        alt="">
                </div>
                <!-- <div @click="goPromotion()" style="position: relative;bottom: -70%; left:10%">
                    <button class="shopbtn">Shop now </button>
                </div> -->
                <div style="position: relative;bottom: -70%; left:10%">
                    <RouterLink to="/products/2">
                        <button class="shopbtn">Shop now </button>

                    </RouterLink>
                </div>
                
            </div>
</template>

<script>
import { RouterLink } from 'vue-router';
export default {
    name: "Promotion",
    props: {
        text: String,
        img: String, 
        textBtn: String,
        btn: String,
        pro_bg: String

    },
    components: {
    RouterLink
},
    methods:{
        goPromotion(){
            this.$router.push(`/products/2`);
        }
    }

}
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.shopbtn{
    border: none;
    padding: 8px 15px;
    justify-content: center;
    align-items: center;
    gap: 10px;
    color: white;
    border-radius: 3px;
    background:#3BB77E;
    box-shadow: 14px 14px 36px 0px rgba(85, 85, 85, 0.10);
    cursor:pointer;
}
._promotion {
    margin: 20px 20px 0 0;
    width: 512px;
    height: 300px;
    position: relative;
    border-radius: 10px;
}

._img {
    position: absolute;
    z-index: 1;
    display: flex;
    justify-content: end;
    align-items: end;
    width: 200px;
    height: 250px;
    right: 0px;
    bottom: 0px;
}

._quote {
    position: absolute;
    width: calc(512px-200px);
    position: relative;
}

._text {
    position: absolute;
    top: 75px;
    left: 48px;
    width: 271px;
    color: var(--NestMart-TextHeading, #253D4E);
    font-family: Quicksand;
    font-size: 28px;
    font-style: normal;
    font-weight: 700;
    line-height: 32px;
    letter-spacing: -0.01px;
    z-index: 10;
}

._btn{
    position: absolute;
    left: 48px;
    bottom: 75px
}
img {
    height: 250px;
}</style>