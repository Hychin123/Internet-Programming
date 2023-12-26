<template>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="header" >
        <div class="a">
            <div class="logo" style="margin-right: 80px;">
                <img style="margin-left: -60px;" src="../assets/img/Logo.png" alt="">
            </div>
            <div class="btnSearch" style="margin-right: 200px;">
                <div>
                    <div class="select_option">
                        <select>
                            <option value="" class="option">All Product</option>
                            <option value="">All Category</option>
                            <option value="">All New item</option>
                            <option value="">All Fruis</option>
                            <option value="">All Cake</option>
                        </select>
                    </div>
                </div>
                <img style="width: 2.5px; height: 60%; margin: 10px 14px;" src="../assets/Line 2.png" alt="">
                <div class="form-group" style="display: flex; align-items: center">
                    <input type="text" placeholder="Search for items" >
                       
                    <img style="margin-left: 10px;" src="../assets/fi-rs-search.png" alt="">
  
                </div>
            </div>
        </div>
        <div class="" style="display: flex; gap: 10px;">
            <div class="c" style="">
                <img src="../assets/img/fi-rs-user.png" alt="">
                <p style="margin-bottom: 2px;">Account</p>
            </div>
            <div class="c">
                <img src="../assets/img/compare.png" alt="">
                <p style="margin-bottom: 2px;">Compare</p>
            </div>
            <div class="c">
                <img src="../assets/img/fi-rs-heart.png" alt="">
                <p style="margin-bottom: 2px;">Wishlist</p>
            </div>
            <div class="c">
                <img src="../assets/img/align_center.png" alt="">
                <p style="margin-bottom: 2px;">Cart</p>
            </div>
        </div>
    </div>
    
    
</template>

<script>

    export default{
        
        name: " Header",
        props:{
            img: String,
            button:     String,
            menuHeader: String,
        }
    }
</script>
<style scoped>
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');

    .a{
        display: flex;
        justify-content: space-between;
        align-items: center;     
    }
    .header{
        display: flex;
        justify-content: space-between;
        align-items: center;       
    }
    .btnSearch{
        display: flex;
        border: 1px solid #BCE3C9 ;
        width: 700px;
        height: 50px;
        border-radius: 5px;
        
    }
   
    select{
        height: 50px;
        width: 130px;
        border: none;
        margin-left: 20px;
        font-family: 'Quicksand', sans-serif;
        font-size: 18px;
    }
    input{
        height: 45px;
        width: 460px;
        border: 0;
        font-size: 14px;
        color: #CACACA;
;
    }

    .c{
        display: flex; 
        align-items: 
        center; gap: 10px;
    }
    button {
        font-weight: 400;
        color: #ffffff;
        cursor: pointer;
        text-align: center; 
        padding: 0.6rem 0.6rem;
        outline: 0;
    }
</style>