#!/bin/python3

import math
import os
import random
import re
import sys
from collections import Counter


if __name__ == '__main__':
    s = input()
    s = sorted(Counter(s).most_common(),key = lambda x:(-x[1],x[0]))[:3]
    #print(s)
    for k, v in s:
        print(k, v)
    
    
    
    
