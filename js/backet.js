$(document).ready(function(){
//total cost
function update(){

    var $orderTotal = 0;

    $('tr').each(function()
    {
        var $qnt = $(this).find("td .qanity_count").val();
        $qnt = parseInt($qnt, 10); 

        var $price = $(this).find("td.item_price").html();
        $price = parseInt($price.replace(/&nbsp;|\s/g,""), 10); 

        var sum = $price * $qnt;

        $(this).find("td").eq(5).text(sum);

        $orderTotal += sum;
    });

    $('.total_order').text($orderTotal);
    
    console.log($orderTotal);
}

//increment function
function increment( event, step ){
        var row = event.target.parentElement.parentElement;
        var element = $(row).find(".qanity_count");
        var qantity_count = element.val();
        qantity_count = parseInt(qantity_count, 10);
        var result = qantity_count+step
        if(result > 0){
            element.val(result);
            update();
        }
};
$('table').on('click', function(event){
    if(event.target.classList.contains('first_item_incr')){
        increment(event,+1);
    };
    if(event.target.classList.contains('first_item_decr')){
        increment(event,-1);
    };
});

update();
	
});