import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    
    { path: "/", component: () => import("@/views/HomeView.vue") },
    {
      path: "/categories/:categoryId",
      component: () => import("../views/CategoryView.vue"),
    },
    {
      path: "/products/:productId",
      component: () => import("../views/ProductView.vue"),
    },
  ],
});

export default router;
