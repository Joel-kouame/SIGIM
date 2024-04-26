
class CartItem {
    constructor(name, price, img) {

        this.name = name
        this.price = price
        this.img = img
        this.quantity = 1
    }
}

class LocalCart {

    static key = 'cartItems';

    static getLocalCartItems() {
        let cartMap = new Map();
        const cart = localStorage.getItem(LocalCart.key);

        if (cart === null || cart.length === 0) return cartMap

        return new Map(Object.entries(JSON.parse(cart)));
    }

    static addItemToLocalCart(id, item) {

        let cart = LocalCart.getLocalCartItems();
        if (cart.has(id)) {

            let mapItem = cart.get(id);
            mapItem.quantity += 1;
            cart.set(id, mapItem);
        } else

            cart.set(id, item)
        localStorage.setItem(LocalCart.key, JSON.stringify(Object.fromEntries(cart)));

        updateCartUI();

    }



    static removeItemToCart(id) {

        let cart = LocalCart.getLocalCartItems();

        if (cart.has(id)) {
            let mapItem = cart.get(id);
            if (mapItem.quantity > 1) {

                mapItem.quantity -= 1;
                cart.set(id, mapItem);

            } else

                cart.delete(id);

        }

        if (cart.length === 0)

            localStorage.clear();

        else

            localStorage.setItem(LocalCart.key, JSON.stringify(Object.fromEntries(cart)));
        updateCartUI();


    }


}



let buttons = document.querySelectorAll('.bi bi-basket3');

buttons.forEach((button) => {
    button.addEventListener('click', addItemFuncion)
})



function addItemFuncion(e) {
    let id = e.target.getAttribute('id');
    /*  const img = e.target.parentElement.parentElement.parentElement.previousElementSibling.childNodes[1].src ;*/
  /*  const img = e.target.parentElement.parentElement.parentElement.querySelector('img').src;*/
   /* let prix = e.target.querySelector('.product-price').innerText;
    const name = e.target.querySelector('.product-name').innerText;*/
    /* let active_add = document.querySelector('.active_add');*/

      $('.active_add').toggleClass('paner'); 
    console.log(id);

    let clooner_content = document.querySelector('.clooner_content');



    let add_class = clooner_content.appendChild(clooner_content.children[0].cloneNode(true));




    id = id;
    price = Number(prix.replace(" f cfa", ""));

    let item = new CartItem(name, price, img);
    LocalCart.addItemToLocalCart(id, item);


}



function updateCartUI() {

    const wrapper_paner_iterator = document.querySelector('.cart-list');
    wrapper_paner_iterator.innerHTML = "";
    const items = LocalCart.getLocalCartItems('cartItems');




    if (items == null) return


    let count = 0;
    let total = 0;

    for (const [key, value] of items.entries()) {
        const cartItem = document.createElement('div');
        cartItem.classList.add('append_items_panier');
        let price = value.price * value.quantity;
        total_number = count += 1;
        total_price = total += price;
        cartItem.innerHTML =
            `<img class="img_element_content" src="${value.img}" alt="img paner">
             <div class="title_txt_price">
             <div class="name"><span>${value.name}</span></div>
             <div class="quantity_elemt">Quantite : ${value.quantity}</div>
             <div class="price_elemt">${price} f cfa</div>
             </div>
             <div class="delete_btn" style="color:red;display:block;cursor:pointer"><i class="bi bi-x-circle" style="color:red;"></i></div>`;

        cartItem.lastElementChild.addEventListener('click', () => {
            LocalCart.removeItemToCart(key)

        })
        wrapper_paner_iterator.appendChild(cartItem);

    }

    if (total_number > 0) {


        document.querySelector('#hover_content_add > span').innerHTML = total_number;
        document.querySelector('.content_final_contents > .final_price').innerHTML = `prix total : ${total_price} f cfa`;

    }

}

document.addEventListener("DOMContentLoaded", () => {

    updateCartUI();



});

