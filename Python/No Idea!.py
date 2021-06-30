# Enter your code here. Read input from STDIN. Print output to STDOUT
n,m = map(int,input().split())
arr = []
A = []
B = []
arr = list(map(int,input().split()))
A= set(list(map(int,input().split())))
B = set(list(map(int,input().split())))
a = 0
b = 0
for i in arr:
    if i in A:
        a = a + 1
    if i in B:
        b = b + 1
print(a-b)
