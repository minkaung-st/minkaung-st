
function closeAlert() {
    var alertElement = document.getElementById("discount-banner");
    alertElement.style.display = "none";
}

var html = '';
var total = 0;
i = 1;

function add(){

    let name = document.getElementById('name').value;
    let price = parseInt(document.getElementById('price').value);
    let quantity = parseInt(document.getElementById('quantity').value);

    let subtotal = price * quantity ;

    total += subtotal; //

    html = html + `
        <tr> <td>${i++}</td> <td>${name}</td> <td>${price}</td> <td>${quantity}</td> <td>${subtotal}</td></tr>
    `;

    document.getElementById('data').innerHTML = html;

    document.getElementById('name').value = '';
    document.getElementById('price').value = '';
    document.getElementById('quantity').value = '';

    document.getElementById('data').innerHTML += `
        <tr> <td colspan="4"> Total </td> <td>${total} Ks </td> </tr>
    `;

    if(total >= 20000) {

        let discount = total / 20 ;
        let grandTotal = total - discount ;

        document.getElementById('data').innerHTML += `
            <tr> <td colspan="4"> Discount </td> <td>${discount} Ks </td> </tr>
        `;

        document.getElementById('data').innerHTML += `
            <tr> <td colspan="4"> Grand Total </td> <td>${grandTotal} Ks </td> </tr>
        `;
    }
}