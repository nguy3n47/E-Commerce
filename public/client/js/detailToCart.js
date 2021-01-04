// input quantity detail
document.getElementById('counter').addEventListener("input", checkValidQuantity);

function checkValidQuantity() {
    const amount = parseInt(document.getElementById('counter').value);
    if (amount < 1) {
        document.getElementById('counter').value = 1;
    }
    else if (amount > 100) {
        document.getElementById('counter').value = 100;
    }
}

// $(document).ready(function () {
//     $('input[type=radio]').click(function () {
//         //alert(this.value);
//         var temp = "amountOfProduct[" + this.value + "]";
//         $('input[name^="amountOfProduct"]').each(function () {
//             if ($(this)[0].name == temp) {
//                 var str = "<b>Còn lại " + this.value + " sản phẩm</b>"
//                 $('#slton')[0].innerHTML = str;
//                 return false;
//             }
//         });
//     });
// });


// passing quantity to cart
function getQuantity() {
    const quantity = document.getElementById('counter').value;
    document.getElementById("qti").value = quantity;

    const color = document.getElementsByName('prod_color');
    let flag = -1;
    for (i = 0; i < color.length; i++) {
        if (color[i].checked) {
            flag = 0;
            document.getElementById("pro_color").value = color[i].value;
        }
    }
    if (flag == -1) {
        alert('Mày chưa chọn màu kìa th ngu');
        return false;
    }
}
