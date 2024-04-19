<?php
include 'poo.php';
$poo = new poo();
?>

<span  onclick="print ()">imprimir</span>
<div id="phptag"></div>

<script>

const div = document.getElementById('phptag');

function print () {
    div.innerHTML = '<?php $poo->print(); ?>'
}


</script>