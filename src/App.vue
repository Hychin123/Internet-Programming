
<template>
  <div class="wrap">
    <div style="display: flex; margin-bottom: 30px;">
      <Header  />
    </div>
    <div style="display: flex;">
      <CategoryHeader />
    </div>

    
  </div>
  <RouterView/>

</template>

<script>
import Header from "@/components/Header.vue";
import CategoryHeader from "@/components/CategoryHeader.vue";
import { RouterView } from "vue-router"; 
export default {
  name: "App",
  components: {
    Header,
    CategoryHeader,
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
