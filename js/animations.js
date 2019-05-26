
//variable declarations
let buttonArray=document.querySelectorAll('.btn-cart');
let cartItems=document.querySelector('.cart-items');
let shoppingCart=document.querySelector('#cart-sidebar');
let cartDropdwn=document.querySelector('.fl-mini-cart-content');
let miniProductList=document.querySelector('#cart-sidebar');
let productName;
let placeholder=document.querySelector('#placeholder');



//if(window.location.href=="http://pazarcim.com/list.html"||window.location.href=="http://pazarcim.com/vegetables.html" ||window.location.href=="http://pazarcim.com/fruits.html"||window.location.href=='http://pazarcim.com/shopping-cart.html'){
  //the following code will only work for the pages listed above dont forget to change the addresses when you go official
  cartItems.innerHTML=0;

  if(/*window.location.href=='http://pazarcim.com/shopping-cart.html'&&*/ sessionStorage){
      for(let i=0;i<sessionStorage.length/3;i++){
      let tablerow='<tr class=" odd"><td class="image hidden-table"><a href="product-detail.html" title="Women\'s Georgette Animal Print" class="product-image"><img src='+sessionStorage.getItem(i+'b')+' width="75" alt="Women\'s Georgette Animal Print"></a></td><td><h2 class="product-name"><a href="product-detail.html">Fresh Organic Mustard Leaves</a></h2></td><td class="a-center hidden-table"><a href="#" class="edit-bnt" title="Edit item parameters"></a></td><td class="a-right hidden-table"><span class="cart-price"><span class="price">'+sessionStorage.getItem(i+'c')+'</span></span></td><td class="a-center movewishlist"><input name="cart[26340][qty]" value="1" size="4" title="Qty" class="input-text qty" maxlength="12"></td><td class="a-right movewishlist"><span class="cart-price"><span class="price">$129.00</span></span></td><td class="a-center last"><a href="#" title="Remove item" class="button remove-item"><span><span>Remove item</span></span></a></td></tr>';
      let body=document.querySelector('#tablerow');
      body.insertAdjacentHTML('afterend',tablerow);
    }
  }
  //sessionStorage reloading previously done orders on the same tab for list.htm,fruits.html,vegetables.html
  if(sessionStorage){
      for(let x=0;x<sessionStorage.length/3;x++){
            let index=x.toString();
            let cartSnipet='<li class="item first"><div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src='+sessionStorage.getItem(index+'b')+'></a><div class="product-details"><div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Çıkar</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div><!--access--><strong>1</strong> x <span class="price">'+sessionStorage.getItem(index+'c')+'</span><p class="product-name"><a href="product-detail.html">'+sessionStorage.getItem(index+'a')+'</a></p></div></div></li>';
            placeholder.insertAdjacentHTML('beforeend',cartSnipet);
            cartParameters();
           }
         }

         //code for the shopping cart on the list.html page
         //
         //
         //


         for(let i=0;i<buttonArray.length;i++){
           buttonArray[i].addEventListener('click',function(){
             cart(i,buttonArray[i]);
           })
         };

         //icrementing the shopping cart objects
         function cart(p,z){

           //code for cartDD
             productName=z.parentElement.parentElement.querySelector('.product-name').innerText;
             let y=z.parentElement.parentElement.previousElementSibling.firstElementChild.firstElementChild.getAttribute('src');
             let price=z.parentElement.previousElementSibling.querySelector('.price').innerText;
             let productImage=z.parentElement.parentElement.previousElementSibling.firstElementChild.firstElementChild.getAttribute('src');
             let cartSnipet='<li class="item first"><div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src='+productImage+'></a><div class="product-details"><div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Çıkar</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div><!--access--><strong>1</strong> x <span class="price">'+price+'</span><p class="product-name"><a href="product-detail.html">'+productName+'</a></p></div></div></li>';
             let archie=p;


             cartParameters();
             sStorage(archie,productName,productImage,price);
             return placeholder.insertAdjacentHTML('beforeend',cartSnipet);

         };
         //session storage features
         function sStorage(a,b,c,d){
           let p=a;
           let product=b;
           let image=c;
           let price=d;
           sessionStorage.setItem(p+'a',product);
           sessionStorage.setItem(p+'b',image);
           sessionStorage.setItem(p+'c',price);
         };

         function cartParameters(){
            cartItems.innerText++;
            cartItems.parentElement.parentElement.parentElement.querySelector('.top-subtotal').innerText=cartItems.innerText+" ürün"
         };

//toggling grid and list display
  let gridButton=document.querySelector('.button-grid');
  let listButton=document.querySelector('.button-list');
  let gridview=document.querySelector('#grid');
  let listview=document.querySelector('#list');

  gridButton.addEventListener('click',function(){
    if(gridview.classList.contains('hidden')){
      gridview.classList.toggle('hidden');
      listview.classList.toggle('hidden');
    }
  });
  listButton.addEventListener('click',function(){
    if(listview.classList.contains('hidden')){
      gridview.classList.toggle('hidden');
      listview.classList.toggle('hidden');
    };
  })


//sessionStorage for shopping-cart.html
//************************************************************************************************************************
/*************************************************************************************************************************
***************************************************************************************************************************
*****************************************************************************************************************************
*/
