<template>
    <div class="_promotion" :style="{
        backgroundColor: pro_bg,
        // color: color
    }">
        <div class="_quote">
            <div class="_text">{{text}}</div>
        </div>
        <div class="_img">
            <!-- <img src="https://image.similarpng.com/very-thumbnail/2020/10/Tiktok-logo-on-transparent-background-PNG.png" alt=""> -->
            <img :src=img
                alt="">
        </div>
        <Button :text="textBtn" :Bgcolor="btn" class="_btn"></Button>
    </div>
</template>

<script>
import Button from './Button.vue';
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
        Button,
    }

}
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

._promotion {
    margin: 20px 20px 0 0;
    width: 512px;
    height: 300px;
    position: relative;
    border-radius: 10px;
    /* background: #F3E8E8; */
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