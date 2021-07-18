class AdvancedArithmetic(object):
    def divisorSum(n):
        raise NotImplementedError

class Calculator(AdvancedArithmetic):
    def divisorSum(self, n):
        if n==1:
            return 1
        i = 1
        s = 0
        while i<=int(n**(0.5)):
            if n%i==0:
                if int(n/i) == i:
                    s = s + i
                else:
                    s = s + int(n/i) + i
                #print(i,int(n/i))
            i += 1
        return s
            


n = int(input())
my_calculator = Calculator()
s = my_calculator.divisorSum(n)
print("I implemented: " + type(my_calculator).__bases__[0].__name__)
print(s)