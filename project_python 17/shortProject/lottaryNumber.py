import random

lottary_Number = []

for i in range(0,6):
    number = random.randint(1,50)
    while number in lottary_Number:
        number = random.randint(1,50)
    lottary_Number.append(number)
lottary_Number.sort()
print(lottary_Number)