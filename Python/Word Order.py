# Enter your code here. Read input from STDIN. Print output to STDOUT
n = int(input())
d = {}
s = ''

for i in range(0,n):
    w = input()
    if w in d:
        d[w] += 1
    else:
        d[w] = 1

print(len(d))

for i in d:
    if s=='':
        s = s + str(d[i])
    else:
        s = s + ' ' + str(d[i])
print(s)
    
