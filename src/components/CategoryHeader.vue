<template>
    <div>
        <div style="width: 1900px;">
            <hr>
        </div>
        <div style="display: flex; flex-direction: row; align-items: center;color: #253D4E; margin-left: 140px;">
            <div class="" style="width: 250px;gap: 10px; display: flex;align-items: center; height: 44px; 
            border-radius: 5px;  background: #3BB77E; margin-right: 45px;">
                <img style="margin-left: 20px;" src="../assets/fi-rs-apps.png" alt="">
                <select name="" id="">   
                    <option value="">Browse All Categories</option>
                </select>
            </div>
            <div style="display: flex; align-items: center;justify-content: center; gap: 50px;">
                <div style="display: flex; align-items: center">
                    <img style="margin-right: 10px;" src="../assets/hot_icon.png" alt="">
                    <h3 @click="go()">Hot Deals</h3>
                </div>
                <div>
                    <h3 @click="go()">Home</h3>
                </div>
                <div style="display: flex; align-items: center;">
                    <h3 @click="go()">Food</h3>
                    <img style="margin-left: 10px; margin-top: 2px;" src="../assets/down.png" alt="">
                </div>
                <div style="display: flex; align-items: center;">
                    <h3 @click="go()">Vegetables</h3>
                    <img style="margin-left: 10px; margin-top: 2px;" src="../assets/down.png" alt="">
                </div>
                <div>
                    <h3 @click="go()">Drink</h3>
                </div>
                <div>
                    <h3 @click="go()">Cookies</h3>
                </div>
                <div style="display: flex; align-items: center;">
                    <h3 @click="go()">Meat & Seafood</h3>
                    <img style="margin-left: 10px; margin-top: 2px;" src="../assets/down.png" alt="">
                </div>
                <div>
                    <h3 @click="go()">Bakery</h3>
                </div>

            </div>
            <div style="display: flex; align-items: center; flex-direction: row; width: 184px; height: 45px; margin-left: 100px;">
                <img src="../assets/fi-rs-headset.png" alt="">
                <div style="margin-left: 10px; ">
                    <h1 style="font-size: 24px; margin-top: 2px; color:#3BB77E;">097 5063 390</h1>
                    <h3 style="font-size: 12px; color: #7E7E7E; margin-top: -14px;">24/7 Support Center</h3>
                </div>
            </div>
        </div>

        
        <div style="width: 1900px;">
            <hr>
        </div>
    </div>

</template>

<script>
    import {useRouter} from 'vue-router';
    export default{
        name: "CategoryHeader",
        props:{
            img: String,
            
        },
        methods:{
            go(){
                this.$router.push("/categories/1");
            }
        }
    }
</script>
<style scoped>
    h3:hover{
        cursor: pointer;
    }
    select{
        background: none;
        border: 0;
        color: white;
        width: 187px;
        font-size: 16px;
    }
</style>