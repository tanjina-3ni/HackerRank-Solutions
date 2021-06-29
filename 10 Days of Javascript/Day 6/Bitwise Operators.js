function getMaxLessThanK(n, k){
    var max = 0;
    for (var a=1; a<n; a++)
    {
        for (var b=a+1; b<=n; b++)
        { 
            var x = a&b;
            if (max<x && x<k){
                max = a&b;
            }
        }
    }
    return max;
}