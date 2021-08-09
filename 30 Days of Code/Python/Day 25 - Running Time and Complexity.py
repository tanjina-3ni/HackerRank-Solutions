# Enter your code here. Read input from STDIN. Print output to STDOUT
import math
t = int(input())
for i in range(t):
    n = int(input())
    f = 0
    if n==1:
        f=1
    else:
        for j in range(2,int(math.sqrt(n))+1):
            if n%j==0:
                f=1
                break
    if f==0:
        print("Prime")
    else:
        print("Not prime")