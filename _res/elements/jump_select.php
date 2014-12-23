<?php
global $_tags;
function create_tags($names){
    global $_tags;
    for($i = 0; $i < count($names); $i++){
    
        $_tags[$i] = '<li><button onclick="jump_to(this,' . "'{$names[$i]}')" . '" onmouseout="hover_back(this)" onmouseover="hover_show(this,'. "'{$names[$i]}')". '"></button></li>';
        //echo $tags[$i];
    }

}
function insert_tags(){
    global $_tags;
    for($i = 0; $i < count($_tags); $i++){
        echo $_tags[$i];   
    }
}
?>
<script>
function hover_show(element,name){
 
    element.style.width = name.length*10 + "px";
    element.innerHTML = name;
    
}
function hover_back(element){
    element.style.width = "30px";
    element.innerHTML = "";
}
function jump_to(element,name){
    current_url = document.URL;
    if(current_url.search('#') != -1){
        current_url = current_url.substring(0,current_url.search('#'));
    }
    jumpto = current_url + "#" + name;    
    //alert(jumpto); // use for debug. shows the page you will jump to
    document.location.href = jumpto;
}
</script>
<style>
ul.hold_buttons{
    list-style-type: none;
    position: fixed;
    right: 10px;
    top: 20%;
    text-align: right;
    z-index: 999;
}
ul li button{
    background-color: #ffcd00;
    border: none;
    width: 30px;
    height: 30px;
    margin: 5px;
}
</style>
<html>


</html>