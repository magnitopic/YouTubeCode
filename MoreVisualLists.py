a = [1, 2, 3]
x = a[:]  # copy a list by value
y = a  # copy a list by reference

print("a: " + str(a))
print("x: " + str(x))
print("y: " + str(y))
print("======================")
x[1] = "John"
print("a: " + str(a))
print("x: " + str(x))
y[1] = "Mary"
print("-------------")
print("a: " + str(a))
print("y: " + str(y))
