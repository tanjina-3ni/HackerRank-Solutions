# Enter your code here. Read input from STDIN. Print output to STDOUT
import math
a = float(input())
b = float(input())
h = math.sqrt(a**2+b**2)
ans = round(math.degrees(math.acos(b/h)))
print(ans,chr(176),sep='')