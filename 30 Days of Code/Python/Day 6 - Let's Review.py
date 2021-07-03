# Enter your code here. Read input from STDIN. Print output to STDOUT

t = int(input())
for i in range(t):
    s = input()
    o = ''
    e = ''
    for j in range(len(s)):
        if j%2==0:
            e = e + s[j]
        else:
            o = o + s[j]
    print(e,o)