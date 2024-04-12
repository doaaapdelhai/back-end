
<script src="jquery-3.6.0.js"></script>

<script>
$("._cart").click(function(){

var id_pro=$(this).attr("id_pro"); //id
// console.log(id_pro);

$.post("functions/addToCart.php",
{
    id_pro:id_pro
},function(){
    $(".shopping-list").load(location.href+" .shopping-list",function(){
        delCart();
    });
})

});
</script>

<script>

 function delCart(){
    $(".del_cart").click(function(){
        $(this).closest(".li_cart").remove();
        var id_pro=$(this).attr("id_pro");
        console.log(id_pro);
    });
 }
 delCart();
</script>  


    

 