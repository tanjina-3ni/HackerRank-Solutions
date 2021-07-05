# Enter your code here. Read input from STDIN. Print output to STDOUT
n = int(input())
d = {}
for i in range(0,n):
    s = input().split()
    d[s[0]] =s[1]

while 1:
    try:
        q = input()
        if q in d:
            print(q, "=", d[q], sep="")
        else: 
            print("Not found")
    except:
        break
    
