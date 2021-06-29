* Implement a Polygon class with the following properties:
 * 1. A constructor that takes an array of integer side lengths.
 * 2. A 'perimeter' method that returns the sum of the Polygon's side lengths.
 */
class Polygon{
    constructor(h){
        
        var p = 0;
        for (var i in h){
            p = p + h[i];
        }
        this.p = p;
    }
    perimeter(){
        return this.p;
    }
}