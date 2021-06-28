/**
*   Return the second largest number in the array.
*   @param {Number[]} nums - An array of numbers.
*   @return {Number} The second largest number in the array.
**/
function getSecondLargest(nums) {
    // Complete the function
    var max = -1;
    var secondmax = -11;
    for(var i=0; i<nums.length;i++)
    {
        if(nums[i]>max)
        {
            secondmax = max;
            max = nums[i];
        }
        else if (nums[i]<max && nums[i]>secondmax)
        {
            secondmax = nums[i];
        }
    }
    return secondmax;
}
