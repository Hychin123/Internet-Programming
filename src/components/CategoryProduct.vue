<template>
    <div class="product" >
        <div class="_itemProduct" :class="{state2: state === 2}">
            <div :class="[tagStyle]">
                {{ Tag }}
            </div>
            <div class="img" >
                <img :src=Img alt="">
            </div>
            <div class="header">
                {{ Name }}
            </div>
            <div class="description" @click="go( Id )">
                {{ Description }}
            </div>
            <div class="sky">
                    <div><img :src=Sky alt=""><img :src=Sky alt=""><img :src=Sky alt=""><img :src=Sky alt="">
                        <img :src=Sky_1 alt=""> 
                    </div>    
                    <div style="color: rgba(126, 126, 126, 1);">
                        {{ Sky_Title }}
                    </div>
            </div>
            <div class="rate">
                    {{ Rate }}
            </div>
            <div class="Menu_add">
                <div style="display: flex;align-items: center;">
                    <div class="a_1">{{ SellPrice }}</div>
                    <div class="a_2">{{ DiscountPercentage }}</div>
                    <div class="a_3"></div>
                </div>
                <div class="add" :class="{ 'add-state-1': currentState === 1, 'add-state-2': currentState === 2 }">
                    <div style="color: var(--NestMart-Brand-1, #3BB77E); font-size: 14px;">
                        {{ IconAdd }}
                    </div>
                    <div class="a_4" v-if="currentState === 1">
                        <img :src=Up alt="">
                        <img :src=Down alt="">
                    </div>
                    <div class="a_4" v-if="currentState === 2">
                        <img :src=Plus alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default{
        name: 'CategoryProduct',
        props:{
            Id: String,
            Tag: String,
            Img: String,
            Name: String,
            Rate: String,
            Sky: String,
            Sky_1:String,
            Sky_Title:String,
            Description: String,
            SellPrice: String,
            DiscountPercentage: String,
            DiscountPrice: String,
            Add: String,
            IconAdd: String,
            BgColor:String,
            Up: String,
            Down: String,
            Plus: String,
            currentState: Number,
            tagStyle: String,
        },
        methods:{
            go(){
                console.log(this.Id);
                this.$router.push(`/products/${this.Id}`)
            }
        }
    }
</script>

<style scoped>
.text-black{
    background-color: black;
    
}
    ._itemProduct{
        display: flex;
        flex-direction: column;
        width: 298px;
        height: 402px;
        border-radius: 10px;
        border: 1px solid #BCE3C9;
        background: #FFF;
        flex-shrink: 0;
        box-shadow: 20px 20px 40px 0px rgba(24, 24, 24, 0.07);
    }
    .tag-1{
        display: inline-flex;
        padding: 10px 15px;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
        margin-bottom: 5px;
        border-radius: 0px 30px 30px 0px;
        background: var(--NestMart-Brand-1, #3BB77E);
        width: 40px;
        color: #FFF;
        z-index: 2;
    }
    .tag-2{
        display: inline-flex;
        padding: 10px 15px;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
        margin-bottom: 5px;
        border-radius: 0px 30px 30px 0px;
        background: var(--NestMart-Brand-2, #FDC040);
        width: 40px;
        color: #FFF;
        z-index: 2;
    }
    .tag-3{
        display: inline-flex;
        padding: 10px 15px;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
        margin-bottom: 5px;
        border-radius: 0px 30px 30px 0px;
        background: white;
        width: 40px;
        color: #FFF;
        z-index: 2;
    }
    
    .img{
        display: flex;
        align-content: center;
        justify-content: center;
        margin-bottom: 10px;
    }
    .header{
        color: rgba(126, 126, 126, 1);
        font-family: Lato;
        font-size: 12px;
        font-weight: 400;
        line-height: 18px;
        margin-left: 19px;
    }
    .description{
        color: var(--NestMart-TextHeading, #253D4E);
        font-family: Quicksand;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: 20px; 
        letter-spacing: -0.006px;
        margin-left: 19px;
        width: 261px;
        height: 49px;
        flex-shrink: 0;
        cursor:pointer;
    }
    .sky{
        display: inline-flex;
        flex-direction:  flex-start;
        gap: 10px;   
        margin-left: 19px;
        margin-top: -10px;
    }
    .rate{
        color: var(--NestMart-TextBody, #7E7E7E);
        font-family: Lato;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px; /* 150% */
        margin-left: 19px;
        margin-top: 10px;
    }
    .Menu_add{
        display: inline-flex;
        justify-content: center;
        align-items: center;
        gap: 107px;
        margin-top: 15px;
    }
    .add-state-1{
        width: 67px;
        height: 29px;
        flex-shrink: 0;
        border-radius: 4px;
        border: 1px solid var(--NestMart-Brand-1, #3BB77E);
        background: #FFF;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        
    }
    .add-state-2{
        width: 67px;
        height: 29px;
        flex-shrink: 0;
        border-radius: 4px;
        background: #dcd3a2;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 18px;
        
    }
    .a_1{
        color: var(--NestMart-Brand-1, #3BB77E);        
        font-family: Quicksand;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 32px; /* 160% */
        letter-spacing: -0.008px;
    }
    .a_2{
        color: var(--NestMart-TextBody, #7E7E7E);
        font-family: Quicksand;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 20px; /* 166.667% */
        letter-spacing: -0.005px;
        margin-top: 5px;
        margin-left: 6px;
    }
    .a_3{
        position: absolute;
        width: 30px;
        height: 1px;
        background: black;
        margin-left: 48px;
        margin-top: 4px;
    }
    .a_4{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .a_4 > img{
        height: 10px;
        width: 10px;
    }
    .img{
        width: 100%;
        height: 136px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }
    


</style>