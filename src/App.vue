

<template>
 
  <div class="wrap">
    <!-- <h1>This My New Vue Js</h1> -->
    <div style="display: flex; flex-direction: column;">
      <div class="Menu">
        <Menu  />
      </div>
      <div style="display: flex;">
        <div v-for="i in category" :key="i.category" class="_fruit">
          <FruitItem :bgColor=i.bg :Img=i.img :Title=i.title :Item=i.item></FruitItem>
        </div>
      </div>
    </div>
    <div style="display: flex; flex-direction: column;">

      <div style="display: flex; margin-bottom: 20px;">
        <div v-for="i in promotion" :key="i.promotion">
        <Promotion :text="i.text" :img="i.img" :pro_bg="i.bg" :btn="i.btnColor" :textBtn="i.txtBtn"></Promotion>
      </div>
      </div>
      <div class="">
        <MenuProduct/>
      </div>
    </div>
    <div class="product">
      <div v-for="i in categoryProduct" :key="i.id">
        <PopularProducts 
          :Tag="i.Tag" :Img="i.img" :Name="i.Name" 
          :Description="i.Description" :Sky="i.Sky" 
          :Sky_1="i.Sky_1" :Sky_Title="i.Sky_Title" 
          :Rate="i.Rate" :SellPrice="i.SellPrice" :DiscountPercentage="i.DiscountPercentage" 
          :IconAdd="i.IconAdd" :Up="i.Up" :Down="i.Down" :Plus="i.Plus" :currentState = "i.currentState"
          :tagStyle="i.tagStyle"
        />
    </div>
  </div>
</div>


 
</template>

<script>
import Onion from "./assets/img/Onion.png";
import Vegetable from "./assets/img/vegetable.png";
import Button from "./components/Button.vue";
import FruitItem from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
import Menu from "./components/Menu.vue";
import MenuProduct from "./components/MenuProduct.vue";
import PopularProducts from "./components/CategoryProduct.vue";
export default {
  name: "App",
  components: {
    Button,
    FruitItem,
    Promotion,
    Image,
    Menu,
    MenuProduct,
    PopularProducts
  },
  // computed: {
  //   filteredCategoryProduct() {
  //     if (this.currentState === 1) {
  //       // Filter for state 1
  //       return this.categoryProduct.filter((item) => item.id <= 5);
  //     } else if (this.currentState === 2) {
  //       // Filter for state 2
  //       return this.categoryProduct.filter((item) => item.id > 5);
  //     } else {
  //       // Handle other states or return the entire array
  //       return this.categoryProduct;
  //     }
  //   },
  // },
  data() {
    return {

      promotion: [
        {
          text: "Everyday Fresh & Clean with Our Products",
          img: new URL(Onion, import.meta.url).href,
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
          img: new URL("./assets/img/orange.png", import.meta.url).href,          
          title: "Orange",
          item: "63 items"
        }
      ],

      categoryProduct:[
        { 
            id: 1,
            tagStyle: 'tag-1',
            Tag: "-17%",
            img: new URL("./assets/img/photo_1.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "1",
            Up: new URL("./assets/img/up.png", import.meta.url).href,
            Down: new URL("./assets/img/down.png", import.meta.url).href,
            currentState: 1
        },
        {
            id: 2,
            tagStyle: 'tag-1',
            Tag: 'Hot',
            img: new URL("./assets/img/photo_2.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "All Natural Italian-Style Chicken Meatballs",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
            
        },
        {
          id: 3,
            tagStyle: 'tag-2',
            Tag: "Sale",
            img: new URL("./assets/img/photo_3.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Angie’s Boomchickapop Sweet & Salty Kettle Corn",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 4,
            tagStyle: 'tag-3',
            Tag: "n",
            img: new URL("./assets/img/photo_5.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Foster Farms Takeout Crispy Classic Buffalo Wings",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 5,
          tagStyle: 'tag-3',
            Tag: "-17%",
            img: new URL("./assets/img/photo_4.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Blue Diamond Almonds Lightly Salted Vegetables",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 6,
          tagStyle: 'tag-3',
            Tag: "-17%",
            img: new URL("./assets/img/photo_6.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Chobani Complete Vanilla Greek Yogurt",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 7,
          tagStyle: 'tag-1',
            Tag: "Hot",
            img: new URL("./assets/img/photo_7.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 8,
          tagStyle: 'tag-3',
            Tag: "-17%",
            img: new URL("./assets/img/photo_8.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Encore Seafoods Stuffed Alaskan Salmon",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 9,
          tagStyle: 'tag-3',
            Tag: "-17%",
            img: new URL("./assets/img/photo_9.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Gorton’s Beer Battered Fish Fillets with soft paper",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },
        {
          id: 10,
          tagStyle: 'tag-2',
            Tag: "Sale",
            img: new URL("./assets/img/photo_10.png", import.meta.url).href,
            Name: "Hodo Foods",
            Description: "Haagen-Dazs Caramel Cone Ice Cream Ketchup",
            Sky: new URL("./assets/img/star.png", import.meta.url).href,
            Sky_1: new URL("./assets/img/star_1.png", import.meta.url).href,
            Sky_Title: "(4.0)",
            Rate: "500gram",
            SellPrice: "$2.51",
            DiscountPercentage: "$5.80",
            IconAdd: "Add",
            Plus: new URL("./assets/img/plus.png", import.meta.url).href,
            currentState:2
        },

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
