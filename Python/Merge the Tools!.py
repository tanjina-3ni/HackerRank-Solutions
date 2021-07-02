def merge_the_tools(string, k):
    # your code goes here
    n = len(string)
    s = ''
    for i in range(n):
        if string[i] not in s:
            s = s + string[i]
        if int((i+1)%k)==0:
            print(s)
            s = ''

if __name__ == '__main__':
    string, k = input(), int(input())
    merge_the_tools(string, k)