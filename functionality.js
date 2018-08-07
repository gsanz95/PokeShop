function removeItem(elem) {
    let e = elem.parentElement.parentElement;
    let p = elem.getAttribute('value');

    e.parentNode.removeChild(e);

    serverRemove(p);
    return false;
}

function serverRemove(id){
    $.ajax({
        url: "remove.php",
        type: "POST",
        data: {poke: id}
        //Debug
        /*,
        success:function(data,status) {
            alert(data);
        }*/
        //async: false;
    });

    /*$(document).ready(function () {
        $.post("remove.php",{poke: id},
            function(data,status) {
                alert(data);
            })
    })*/
}

function checkout() {
    //TO-DO Check out and store in database
    window.location.href='checkout.html';
}