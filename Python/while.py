while True:
  print("Hi")
  break

print("_____________________")

i=1
while i<=10:
  print("valor "+str(i))
  i+=1
  
print("_____________________")

import random
while True:
  num=random.randint(1, 1000)
  print(num)
  if num>900:
    break

print("_____________________")

import random
num=0
while num<900:
  num=random.randint(1,1000)
  print(num)

print("_____________________")

from math import *
num=10000
print(num)
while True:
  num=sqrt(num)
  print(num)
  if num==1:
    break

print("_____________________")

num=10000
print(num)
while not num==1:
  num=sqrt(num)
  print(num)