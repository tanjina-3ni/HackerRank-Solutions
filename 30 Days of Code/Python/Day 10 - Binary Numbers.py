#!/bin/python3

import math
import os
import random
import re
import sys

def decimalToBinary(n):
    return "{0:b}".format(int(n))

if __name__ == '__main__':
    n = int(input().strip())
    n = decimalToBinary(n)
    c = 0
    m = 0
    for i in range(len(n)):
        if n[i]=='1':
            c = c + 1
        elif n[i]=='0':
            c = 0
        if m<c:
            m=c
    print(m)
    
    