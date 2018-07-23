function removeItem(elem) {
    var e = elem.parentElement.parentElement;
    e.parentNode.removeChild(e);
    return false;
}

function checkout() {
    //TO-DO Check out and store in database
    window.location.href='./checkout.html';
}

function addToCart(){
    //TO-DO: Add to cart
    window.location.href='./cart.html';
}