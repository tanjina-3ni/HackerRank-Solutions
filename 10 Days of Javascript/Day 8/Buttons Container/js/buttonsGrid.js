var btn5=document.getElementById('btn5');
var array=[1,2,3,6,9,8,7,4];
btn5.onclick=function()
{
    var x = array.pop();
    array.unshift(x);
    
    document.getElementById('btn1').innerHTML =array[0];
    document.getElementById('btn2').innerHTML =array[1] ;
    document.getElementById('btn3').innerHTML =array[2];
    document.getElementById('btn6').innerHTML =array[3];
    document.getElementById('btn9').innerHTML =array[4];
    document.getElementById('btn8').innerHTML =array[5];
    document.getElementById('btn7').innerHTML =array[6];
    document.getElementById('btn4').innerHTML =array[7];
    
}