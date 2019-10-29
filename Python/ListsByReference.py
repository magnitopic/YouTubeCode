#list: Copy a list of list by reference
x = [1, 2, 3]
y = x
print(x)
print(y)
print("__________")

y[1] = 200
print(x)
print(y)

print("~~~~~~~~~~~~~~")

#list: Copy a list of list by value
x = [1, 2, 3]
y = x[:]
print(x)
print(y)
print("__________")

y[1] = 200
print(x)
print(y)