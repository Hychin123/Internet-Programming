<template>
    <div class="Productpage" style="margin-left: 130px;">
        <div style="display:flex;gap:.4rem;align-items: center;">
            <RouterLink class="RouterLink" to="/">Home</RouterLink>
            <img src="../assets/fi-rs-angle-small-right 2.png" style="margin-top: 4px;height: 12px;"/>
            <RouterLink class="RouterLink" :to="`/categories/${Product.categoryProduct}`">{{ Category }}</RouterLink>
            <img src="../assets/fi-rs-angle-small-right 2.png" style="margin-top: 4px;height: 12px;"/>
            <p style="color:var(--tpgreen);font-weight: 500;">{{ Product.description}}</p>
        </div>
        <div class="product">
            <div class="productimg">
                <div style="position: absolute; top: 280px; left: 900px;">
                    <img style="width: 24px; height: 24px; " src="../assets/fi-rs-search.png" alt="">
                </div>
                <img style="width: 784px; height: 421px ;" src="../assets/mengo_big.png" alt="">
            </div>
            <div class="productdet" style="margin-left: 14px;">
                <div style="width: 101.683px;height: 29px;flex-shrink: 0;border-radius: 4px; background: #DEF9EC; display: flex; align-items: center; 
                justify-content: center; color: var(--NestMart-Brand-1, #3BB77E);">
                    In Stock
                </div>
                <h1 style="width: 750.878px;height: 97.967px;flex-shrink: 0; font-size: 48px;font-weight: 700; margin-top: 10px;">
                    Seeds of Change Organic Quinoa, Brown
                </h1>
                <div style="display:flex; gap:0.1rem; align-items:center; margin-top: -20px;">
                    <img src="../assets/img/star.png" alt="">
                    <img src="../assets/img/star.png" alt="">
                    <img src="../assets/img/star.png" alt="">
                    <img src="../assets/img/star.png" alt="">
                    <img src="../assets/img/star_1.png" alt="">
                    <p style="margin-left: 10px;">(4.0)</p>
                </div>
                <div style="display:flex; gap:3rem; align-items: baseline;">
                    <div style="width: 164.728px;color: var(--NestMart-Brand-1, #3BB77E) ;font-family: Quicksand;
                    font-size: 72px;font-style: normal;font-weight: 700;line-height: 78px; /* 108.333% */letter-spacing: -0.029px;">
                        $38
                    </div>
                    <div>
                        <div style="width: 79.016px;color: var(--NestMart-Text-Muted, #B6B6B6);
                            font-family: Quicksand;font-size: 32px;font-style: normal;font-weight: 700;line-height: 40px; /* 125% */letter-spacing: -0.013px;"> 
                            $42
                        </div>
                        <div style="position: relative; width: 60px; height: 2px; background: var(--NestMart-Text-Muted, #B6B6B6); margin-top: -20px;"></div>
                    </div>
                </div>
                <p style="width: 650.232px;height: 117.441px;flex-shrink: 0;color: var(--NestMart-TextBody, #7E7E7E); margin-top: 10px;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, 
                    odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>

                <div style="display:flex;gap:1rem;margin-top: -30px; ">
                    <div style="width: 117.474px;height: 50px;flex-shrink: 0; display: flex;justify-content: space-between;border-radius: 7.013px;
                     border: 1.753px solid var(--NestMart-Brand-1, #3BB77E); align-items: center ;">
                        <div style="margin-left: 30px; font-size: 20px; color: var(--NestMart-Brand-1, #3BB77E);"> 1 </div>
                        <div style="display:flex; flex-direction: column; margin-right: 10px;">
                            <img  src="../assets/img/up.png"/>
                            <img width="23" src="../assets/img/down.png"/>
                        </div>
                    </div> 
                    <div class="custombtn">
                        <img style="width:16px;margin-left: 1.4rem; color: #fff;" src="../assets/img/align_center.png"/>
                        <button style="font-family: Quicksand;font-size: 18px;">Add To Cart</button>
                    </div>
                    <div style="display:flex; place-items: center;border:2px solid rgb(146, 145, 145,0.4);padding:1rem;border-radius: 5px;opacity: 0.5;cursor: pointer;">
                        <img style="width: 16px;" src="../assets/img/fi-rs-heart.png"/>
                    </div>
                    <div style="display:flex; place-items: center;border:2px solid rgb(146, 145, 145,0.2);padding:1rem;border-radius: 5px;cursor: pointer;">
                        <img style="width: 16px;" src="../assets/fi-rs-shuffle 1.png"/>
                    </div>
                </div>
                <div style="display:flex;flex-direction: column;position: absolute;bottom:0;">
                    <span style="width: 100%;">Vendor:<span style="margin-left: 10px;opacity: 0.6;">NestMart</span></span>
                    <span style="width: 100%;">SKU:<span style="margin-left: 10px;opacity: 0.6;">FJS823JWF</span></span>
                </div>
            </div>
        </div>
        <!-- scrollproduct -->
        <div class="scrollproduct">
            <button class="arrow_1" style="top:25%;right:430px;">
                <img src="../assets/fi-small-right 2.png"/>
            </button>
            <div style="display: flex;gap:1rem;">
                <div class="miniprod">
                    <img class="ab" src="../assets/img/photo_3.png"/>
                </div>

                <div class="miniprod" style="border: 1px solid var(--NestMart-Brand-1, #F2F3F4);">
                    <img class="ab" src="../assets/zppb2xd1.png"/>
                </div>

                <div class="miniprod" style="border: 1px solid var(--NestMart-Brand-1, #F2F3F4);">
                    <img class="ab" src="../assets/berry.png"/>
                </div>
                
                <div class="miniprod" style="border: 1px solid var(--NestMart-Brand-1, #F2F3F4);">
                    <img class="ab" src="../assets/berry_1.png"/>
                </div>
            </div>
             <button class="arrow" style="top:25%;left:0;">
                <img src="../assets/life_align_center.png"/>             
            </button>
        </div>
        <!-- description -->
        <div class="desc">
            <div class="" style="display: flex;gap:1rem; ">
                <button style="margin-left: 80px;">Description</button>
                <button style="color: #B6B6B6;">Additional info</button>
                <button style="color: #B6B6B6;">Reviews <span style="font-weight: 700;">({{ Product.rate + Math.floor(Math.random() * 10) + 1 }})</span></button>
            </div>
            <div class="description" style="display:flex;flex-direction: column;gap:0rem;">
                <p>Uninhibited carnally hired played in whimpered dear gorilla koala dependig and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>
                  <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because. </p>
            </div>
        </div>
    </div>
</template>

<script>
import { useRoute,useRouter } from 'vue-router';
import { useProductStore } from '../store/StoreData.js';
import { RouterLink} from 'vue-router';

    export default {
    components: { RouterLink,},
    setup(){
        const route = useRoute();
        const router = useRouter();
        const Productid = route.params.productId;
        //redirect to notfound if category id is bigger than what we have
        const myProductStore = useProductStore();
        
        const Product = myProductStore.getProd(Number(Productid) - 1);

        if (!Product) {
        // router.push('/NotFound');
        const Category = myProductStore.getCat(Product.categoryProduct - 1)?.title || 'Unknown Category';
        
        return { Product, Category };
        } else {
        // Get the category title based on the product's category ID
        const Category = myProductStore.getCat(Product.categoryProduct - 1)?.title || 'Unknown Category';
        
        return { Product, Category };
        }
    },

}
</script>

<style scoped>

.description{
    margin-top: 30px;

    margin-left: 80px;
    width: 1440.776px;
    height: 158.077px;
    flex-shrink: 0;
    color: var(--NestMart-TextBody, #7E7E7E);
    font-family: Lato;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px; /* 150% */
    display: flex;
    align-items: center;
}
.miniprod{
    width: 117.6px;
    height: 117.6px;
    border-radius: 15px;
    border: 1px solid var(--NestMart-Brand-1, #3BB77E);
    background: #FFF;
    display: flex;
    justify-content: center;
    align-items: center;
}
.ab{
    width: 106.372px;
    height: 84.786px;
    flex-shrink: 0;

}
.arrow{
    position:absolute;
    width: 53.57px;
    height: 40px;
    flex-shrink: 0;
    border-radius: 30px;
    background: var(--NestMart-Brand-1, #3BB77E);
    border: 0;
    margin-top: 15px;
}
.arrow_1{
    position:absolute;
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    border-radius: 30px;
    background: var(--NestMart-Brand-1, #3BB77E);
    border: 0;
    margin-top: 15px;
}
.scrollproduct{
    width: 50%;
    padding:0 4rem;
    position: relative;
}

.desc{
    margin-top: 20px;
    width: 1583px;
    height: 324px;
    flex-shrink: 0;
    border-radius: 15px;
    border: 1px solid var(--NestMart-Background_grey-1, #F2F3F4);
    background: var(--NestMart-White, #FFF);
    
}
.desc button{
    margin-top: 60px;
    display: flex;
    padding: 15px 30px;
    justify-content: center;
    align-items: center;
    gap: 5px;
    border-radius: 30px;
    border: 1px solid var(--NestMart-Background_grey-1, #F2F3F4);
    background: #FFF;
    color: var(--NestMart-Brand-1, #3BB77E);
    font-family: Quicksand;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: 15px; /* 83.333% */
    letter-spacing: -0.007px;

/* Shadow-2 */
box-shadow: 5px 5px 15px 0px rgba(24, 24, 24, 0.05);
}
.desc button:active{
    box-shadow: 5px 5px 15px 0px rgba(24, 24, 24, 0.05);
}
.addproductqtn{
    display: flex;
    padding:0 .5rem 0 1.5rem;
    border: 2px solid var(--tpgreen);
    border-radius: 5px;
    align-items: center;
    gap:1.5rem;
    font-weight: 600;
    color:var(--tpgreen);
}
.addproductqtn img:hover{
    cursor: pointer;
    background-color: rgb(146, 144, 144,0.2);
    border-radius: 5px;
}
.custombtn{
    width: 175.559px;
    height: 50px;
    flex-shrink: 0;
    display:flex;
    border-radius: 4px;
    background: var(--NestMart-Brand-1, #3BB77E);
    align-items: center;
}
.custombtn button{
    background:none;
    color:white;
    padding:.3rem 1rem;
    border:none;
    cursor: pointer;
}
.product{
    display:flex;
    justify-content: space-between;
    gap: 2rem;

}
.productimg{
    width: 665.159px;
    height: 596.139px;
    flex-shrink: 0;
    border-radius: 15px;
    border: 1px solid var(--NestMart-BorderColor-1, #E5E5E5);
    background: #FFF;
    display: flex;
    align-items: center;
    justify-content: center;
}
.productdet{
    display:flex;
    flex-direction: column;
    gap:1rem;
    justify-content: start;
    position: relative;
}
.productimg img{
    width: 100%;
}   
.product > div{
    display: flex;
    flex-grow: 1;
}
    .Productpage{
        display: flex;
        flex-direction: column;
        gap:1.5rem;
        width: 100%;
    }
    .RouterLink{
        text-decoration: none;
        color:gray;
        opacity: 0.8;
        font-weight: 500;
    }
</style>