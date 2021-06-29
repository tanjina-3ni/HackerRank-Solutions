#!/bin/python

import math
import os
import random
import re
import sys


#
# Complete the 'reverse_words_order_and_swap_cases' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING sentence as parameter.
#

def reverse_words_order_and_swap_cases(sentence):
    # Write your code here
    l = sentence.split()
    l.reverse()
    s = ""
    for i in range(0,len(l)):
        if i==len(l)-1:
            s = s + l[i]
        else:
            s = s + l[i] +  " "

    for i in range(0,len(s)):
        if s[i].islower()==True:
            
            s = s[:i] + s[i].upper() + s[i + 1:]
        elif s[i].isupper()==True:
            
            s = s[:i] + s[i].lower() + s[i + 1:]
    return s
if __name__ == '__main__':