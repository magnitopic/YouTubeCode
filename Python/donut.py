from math import sqrt
import random
import matplotlib.pyplot as plt
n = 10000
p=q=0
plt.figure(figsize=(7,7))
for i in range(n):
  p = random.random() * 8 - 4
  q = random.random() * 8 - 4
  r = sqrt(p ** 2 + q ** 2)
  if 2<r<4:
    x,y=p,q
    plt.plot(x,y,'o',markersize=1)
plt.show()