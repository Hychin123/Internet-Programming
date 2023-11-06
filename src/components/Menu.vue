<template>
    <div class="Menu">
            <h1>Featured Categories</h1>
        <div class="Menu_b">
            <h2 class="a">All</h2>
            <span>Milks&Dairies</span>
            <span>Coffes&Teas</span>
            <span>Pet Foods</span>
            <span>Meats</span>
            <span>Vegatable</span>
            <span>Fruits</span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Menu',

}
</script>

<style scoped>
    .Menu{
        display: flex;
        justify-content: space-between;
    }
    .Menu_b{
        display: flex;
        gap: 20px;
        margin-right: 50px;
        align-items: center;
    }
    .Menu_b .a{
        color: black;
        font-size: 20px;
    }
</style>