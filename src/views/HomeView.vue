

<template>
 
    <div class="wrap">
      <div style="display: flex;">
        <MenuHeader :text1="myProductStore.menuHeader.text1" :text2="myProductStore.menuHeader.text2" 
        :input="myProductStore.menuHeader.input " :button="myProductStore.menuHeader.button"  />
      </div>
      <!-- <h1>This My New Vue Js</h1> -->
      <div style="display: flex; flex-direction: column;">
        <div class="Menu">
          <Menu/>
        </div>
        <div style="display: flex;">
          <div v-for="i in myProductStore.category" :key="i.category" class="_fruit">
            <FruitItem :bgColor=i.bg :Img=i.img :Title=i.title :Item=i.item :Id="i.id"></FruitItem>
          </div>
        </div>
      </div>
      
      <div style="display: flex; flex-direction: column;">
  
        <div style="display: flex; margin-bottom: 20px;">
          <div v-for="i in myProductStore.promotion" :key="i.promotion">
          <Promotion :text="i.text" :img="i.img" :pro_bg="i.bg" :btn="i.btnColor" :textBtn="i.txtBtn">
          </Promotion>
        </div>
        </div>
        <div class="">
          <MenuProduct/>
        </div>
      </div>
      <div class="product">
        <div v-for="i in myProductStore.categoryProduct" :key="i.id">
          <PopularProducts 
            :Tag="i.Tag" :Img="i.img" :Name="i.Name" 
            :Description="i.Description" :Sky="i.Sky" 
            :Sky_1="i.Sky_1" :Sky_Title="i.Sky_Title" 
            :Rate="i.Rate" :SellPrice="i.SellPrice" :DiscountPercentage="i.DiscountPercentage" 
            :IconAdd="i.IconAdd" :Up="i.Up" :Down="i.Down" :Plus="i.Plus" :currentState = "i.currentState"
            :tagStyle="i.tagStyle"
            :Id ="i.id"
          />
      </div>
    </div>
  </div>
  
  </template>
  
  <script>
  import FruitItem from "@/components/Category.vue";
  import Promotion from "@/components/Promotion.vue";
  import Menu from "@/components/Menu.vue";
  import MenuProduct from "@/components/MenuProduct.vue";
  import PopularProducts from "@/components/CategoryProduct.vue";
  import Header from "@/components/Header.vue";
  import CategoryHeader from "@/components/CategoryHeader.vue";
  import MenuHeader from "@/components/MenuHeader.vue";
  import { useProductStore } from "../store/StoreData";
  export default {
    name: "App",
    components: {
      FruitItem,
      Promotion,
      Image,
      Menu,
      MenuProduct,
      PopularProducts,
      Header,
      CategoryHeader,
      MenuHeader
    },
  setup(){
    const myProductStore = useProductStore();
    return{
      myProductStore
    }
  },
  }
  </script>
  <style scoped>
  ._fruit {
    display: flex;
    margin-right: 25px;
  }
  
  .wrap {
    width: 100%;
    /* height: 100vh; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .Menu {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: -10px;
    margin-bottom: 20px;
  }
  .product{
    display: grid;
    grid-template-columns: repeat(5,298px);
    gap: 24px;
  }
  
  </style>
  