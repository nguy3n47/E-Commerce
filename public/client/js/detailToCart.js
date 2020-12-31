function test(product_id) {
    route('user.editCart', { post: 1337 })
}








// input quantity detail
document.getElementById('counter').addEventListener("input", checkValidQuantity);

function checkValidQuantity() {
    const amount = parseInt(document.getElementById('counter').value);
    const amountOfProduct = parseInt(document.getElementById('amountOfProduct').value);
    if (amount < 1) {
        document.getElementById('counter').value = 1;
    }
    else if (amount > amountOfProduct) {
        document.getElementById('counter').value = amountOfProduct;
    }
}


// passing quantity to cart
function getQuantity() {
    const quantity = document.getElementById('counter').value;
    document.getElementById("qti").value = quantity;
}
