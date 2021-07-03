# Enter your code here. Read input from STDIN. Print output to STDOUT
from collections import deque
t = int(input())
for i in range(t):
    n = int(input())
    l = deque(map(int,input().split()))
    f = 0
    while l:
        if l[0]>=l[len(l)-1]:
            m = l.popleft()
        elif l[0]<l[len(l)-1]:
            m = l.pop()
        
        if len(l)==1:
            break
        elif ((l[0] > m) or (l[len(l)-1] > m)):
            f = 1
            break
                 
    
    if f==1:
        print('No')
    else:
        print('Yes')
