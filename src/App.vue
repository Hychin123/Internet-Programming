

<template>
  <div class="wrap">
    <h1>This My New Vue Js</h1>
    <div style="display: flex;">
     
      <div v-for="i in category"  class="_fruit">
        <FruitItem :bgColor=i.bg :Img=i.img :Title=i.title :Item=i.item></FruitItem>
      </div>
    </div>
    <div style="display: flex;">

      <div v-for="i in promotion">
        <Promotion :text="i.text" :img="i.img" :pro_bg="i.bg" :btn="i.btnColor" :textBtn="i.txtBtn"></Promotion>
      </div>
    </div>
  </div>

  <!-- <RouterView /> -->
</template>

<script>
import Onion from "./assets/img/Onion.png";
import Vegetable from "./assets/img/vegetable.png";
import Button from "./components/Button.vue";
import FruitItem from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
export default {
  name: "App",
  components: {
    Button,
    FruitItem,
    Promotion,
    Image
  },
  data() {
    return {

      promotion: [
        {
          text: "Everyday Fresh & Clean with Our Products",
          img: new URL(Onion, import.meta.url).href,
          // img: "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1699228800&Signature=Tpz2rQzeVvnBr9y2ieTzTBCjDCr-H5sSfMxsCQx0rs0IisW~gCJjfdRGfOHtJRt3xBUghQBrlnmRnmMhxlpBMg7j~NdKkQ7Y3kKgMYGkIORWZeuzappL3WKroT23gv9jInhkULvKQB9NpdYkfXgWoMcTymyEB8LvUij6lzDfCrIGhnnxyO2ZIFryVmrpU69PWGDgI6532jA9Ky15d7mvZZFcJ9jm36VvwiZcy9EoTeprsDc1ZxTEeEw4A6T2n51qT7nx4RplP1RNL3fi~NBj9jrvRx2Btm0P0kvVB1xmRyyTWrWscO8ibDneoBrieCoOQow3LlaITubTPbG2epaK3Q__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          txtBtn: "Shop now",
          btnColor: "#3BB77E",
          bg: "#F3E8E8"

        }, {
          text: "Make your Breakfast Healthy and Easy",
          img: new URL("./assets/img/thise.png", import.meta.url).href,          txtBtn: "Shop now",
          btnColor: "#3BB77E",
          bg: "#F3E8E8"
        }, {
          text: "The best Organic Products Online",
          img: new URL(Vegetable, import.meta.url).href,
          txtBtn: "Shop now",
          btnColor: "#FDC040",
          bg: "#E7EAF3"
        },
      ],
      category: [
        {
          bg: "#F2FCE4",
          img: new URL("./assets/img/cat.png", import.meta.url).href,
          title: "Cake & Milk",
          item: "14 items"
        },
        {
          bg: "#FFFCEB",
          img: new URL("./assets/img/peach.png", import.meta.url).href,
          title: "Peach",
          item: "17 items"
        },
        {
          bg: "#ECFFEC",
          img: new URL("./assets/img/red.png", import.meta.url).href,          title: "Oganic Kiwi",
          item: "21 items"
        },
        {
          bg: "#FEEFEA",
          img: new URL("./assets/img/red_1.png", import.meta.url).href,
          title: "Red Apple",
          item: "68 items"
        },
        {
          bg: "#FFF3EB",
          img: new URL("./assets/img/snock.png", import.meta.url).href,          title: "Snack",
          item: "34 items"
        },
        {
          bg: "#FFF3FF",
          img: new URL("./assets/img/black.png", import.meta.url).href,          title: "Black plum ",
          item: "25 items"
        },
        {
          bg: "#F2FCE4",
          img: new URL("./assets/img/veget.png", import.meta.url).href,          title: "Vegetables",
          item: "65 items"
        },
        {
          bg: "#FFFCEB",
          img: new URL("./assets/img/hatphone.png", import.meta.url).href,          title: "Headphone",
          item: "33 items"
        },
        {
          bg: "#FFF3FF",
          img: new URL("./assets/img/milk.png", import.meta.url).href,          title: "Cake & Milk",
          item: "63 items"
        },
        {
          bg: "#FFF3FF",
          img: new URL("./assets/img/orange.png", import.meta.url).href,          title: "Orange",
          item: "63 items"
        }
      ]

    };
  }
}
</script>
<style scoped>
._fruit {
  display: flex;
  margin-right: 25px;
}

.wrap {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>
