async function fetchCartItems() {

    try {
        const response = await fetch('/api/product');
        if (response.ok) {
            const productList = await response.json();
            let HTML = '';
            const productListAppend = document.getElementById('productListAppend');
            if (productList.data.length > 0) {
                for (const items of productList.data) {
                    HTML += `
                      <div class="card">
                        <img src="/storage/product/${items.image}" alt="Product">
                        <h4>${items.name}</h4>
                        <p class="price">${items.price}</p>

                        <div class="quantity-controls removeCart"  id="cartUpdate_${items.id}">
                        <button class="qty-btn" onclick="updateQty(${items.id}, 'minus')">−</button>
                        <input type="number" id="qty-${items.id}" value="1" min="1" readonly />
                        <button class="qty-btn" onclick="updateQty(${items.id}, 'plus')">+</button>
                        </div>
                        <button class="addCart" id="add_${items.id}" onclick="cartUpdate(${items.id})">Add to Cart</button>
                      </div>`;
                }
            }
            else {
                HTML = `<p>No products available</p>`;
            }
            productListAppend.innerHTML = HTML;
        }

    }
    catch (error) {
        console.log('Error fetching cart items:', error);
    }
}

fetchCartItems();

function cartUpdate(id) {
    let addCartId = document.getElementById('add_' + id)
    let updateDiv = document.getElementById('cartUpdate_' + id)
    updateDiv.classList.remove('removeCart');
    addCartId.classList.add('removeCart')
}

function updateQty(id, action) {
    let addCartId = document.getElementById('add_' + id)
    let updateDiv = document.getElementById('cartUpdate_' + id)

    let updateInput = document.getElementById('qty-' + id);
    let currentQty = parseInt(updateInput.value);
    let updateValue = currentQty;

    if (action === 'minus' && currentQty > 1) {
        updateValue = currentQty - 1;
    }
    else if (action === 'plus' && currentQty < 10) {
        updateValue = currentQty + 1;
    }
    if (updateValue == 1) {

        updateDiv.classList.add('removeCart');
        addCartId.classList.remove('removeCart');
    }
    updateInput.value = updateValue
    let csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'update-cart',
        type: 'POST',
        data: { product_id: id, quantity: updateValue, _token: csrfToken },
        success: function (response) {
            console.log('Cart updated successfully:', response);
        }

    })

}