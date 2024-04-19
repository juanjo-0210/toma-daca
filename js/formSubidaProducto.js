var i = 0;
function fichero () {
    
    var inputs = document.getElementsByTagName('input');
    if (inputs[i].value == '') {
        
    }else{
        var dom = document.getElementsByClassName('file');
        dom[i].innerHTML = '<input type="file" name="fichero"/>';
        i++;
    }
    if (i == 8) {
        var add = document.getElementById('add');
        add.innerHTML = '<p>No se puede agregar mas de 8 imagenes</p>';
    }
}