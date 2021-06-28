/*
 * Complete the reverseString function
 * Use console.log() to print to stdout.
 */
function reverseString(s) {
    try{
        var splits = s.split("");
        var rev = splits.reverse();
        var joinrev = rev.join("");
        console.log(joinrev);
    }
    catch(e){
        console.log(e.message);
        console.log(s);
    }
}