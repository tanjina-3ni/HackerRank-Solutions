from itertools import groupby

s = input()
s = list(s)
l = []
for i,j in groupby(map(int,s)):
    l.append(tuple([len(list(j)), i]))
print(*l)