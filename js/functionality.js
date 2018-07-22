function removeItem() {
    var elem = document.getElementById('item1');
    elem.parentNode.removeChild(elem);
    return false;
}
function pageInit() {
    // Hook up the button
    var btn = document.getElementById('btnRemove1');
    if (btn.addEventListener) {
        // DOM2 standard
        btn.addEventListener('click', removeItem, false);
    }
    else {
        // Really old or non-standard browser, try DOM0
        btn.onclick = removeItem;
    }
}
function checkout() {
    window.location.href='./checkout.html';

}