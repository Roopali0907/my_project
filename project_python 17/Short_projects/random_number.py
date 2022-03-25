import random

min = int(input("Enter min limit of range: "))
max = int(input("Enter max limit of range: "))
num = int(input("How many numbers do you want: "))

for x in range (num):
    print (random.randint(min, max))