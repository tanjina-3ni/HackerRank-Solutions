# -*- coding: utf-8 -*-
"""
Created on Sat Jul  3 18:18:38 2021

@author: Tinni
"""

#for i in range(1,int(input())+1): #More than 2 lines will result in 0 score. Do not leave a blank line also
#    print ("".join(map(str,list(range(1,i+1))+list(range(i-1,0,-1)))))
    
for i in range(1,int(input())+1): #More than 2 lines will result in 0 score. Do not leave a blank line also
    print (int(((10**i)-1)/9)**2)