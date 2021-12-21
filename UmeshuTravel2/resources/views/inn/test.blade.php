<form name="myform">
<select id="word">
　 <option name="fruit" value="1">一名
　 <option name="fruit" value="2">二名
　 <option name="fruit" value="3">三名
　 <option name="fruit" value="4">四名
</select>

    <input type="radio" name="option" value=5000>素泊まりプラン
        <input type="radio" name="option" value=7000>朝食付きプラン
        <input type="radio" name="option" value=10000>プレミアムプラン
       <input type="text" name="total" value="0"> 円
</form>


<script>
var select = document.querySelector("#word");
var options = document.querySelectorAll("#word option");

select.addEventListener('change', function(){
        opt = parseInt(this.value);
        price_sum();
});
//クリックを監視
var option_check = document.getElementsByName('option');
for(i=0;i<option_check.length;i++){
    option_check[i].addEventListener('click', function(e){
        price_sum();
    });
}
//合計計算
function price_sum(){
    for (var i = 0; i < fruit_check.length; i++){
        if(fruit_check[i].checked){
            fru = parseInt(fruit_check[i].value);
        }
    }
    document.myform.total.value=opt*fru;
}
</script>













<form name="myform">
<p>
　 <input type="radio" name="fruit" value="1">一名
　 <input type="radio" name="fruit" value="2">二名
　 <input type="radio" name="fruit" value="3">三名
　 <input type="radio" name="fruit" value="4">四名
</p>
<p>
    <input type="radio" name="option" value=5000>素泊まりプラン
        <input type="radio" name="option" value=7000>朝食付きプラン
        <input type="radio" name="option" value=10000>プレミアムプラン
</p>
       <input type="text" name="total" value="0"> 円
</form>


<script>

//クリックを監視
var fruit_check = document.getElementsByName('fruit');
for(i=0;i<fruit_check.length;i++){
    fruit_check[i].addEventListener('click', function(e){
        price_sum();
    });
}
var option_check = document.getElementsByName('option');
for(i=0;i<option_check.length;i++){
    option_check[i].addEventListener('click', function(e){
        price_sum();
    });
}
//合計計算
function price_sum(){
    var sum = 0;
    for(var i = 0 ; i < option_check.length ; i++){
      if(option_check[i].checked){
        opt = parseInt(option_check[i].value);
      }
    }
    for (var i = 0; i < fruit_check.length; i++){
        if(fruit_check[i].checked){
            fru = parseInt(fruit_check[i].value);
        }
    }
    document.myform.total.value=opt*fru;
}
</script>




