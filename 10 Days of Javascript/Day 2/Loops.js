/*
 * Complete the vowelsAndConsonants function.
 * Print your output using 'console.log()'.
 */
function vowelsAndConsonants(s) {
    var i = 0;
    var txt = s;
    var txtt = s;
    var l = txt.length;
    while (i<l)
    {
        if (txt.charAt(i)=="a"||txt.charAt(i)=="e"||txt.charAt(i)=="i"||txt.charAt(i)=="o"||txt.charAt(i)=="u"){
            console.log(txt.charAt(i));
            txtt = txtt.replace(txt.charAt(i),"");
        }
        i++;
        
        
    }
    
    i = 0
    while (i<txtt.length)
    {  
        console.log(txtt.charAt(i));
        i++;
    }
    
    
}