def minion_game(string):
    # your code goes here
    V = 'AEIOU'
    v = 0
    c = 0
    for i in range(len(string)):
        if string[i] in V:
            v = v + len(string) - i
        else:
            c = c + len(string) - i
    if v>c:
        print("Kevin",v)
    elif c>v:
        print("Stuart",c)
    else:
        print("Draw")
            
if __name__ == '__main__':
    s = input()
    minion_game(s)