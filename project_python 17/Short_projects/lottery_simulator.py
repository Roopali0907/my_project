import random

lottery_numbers = []

for x in range(6):
    numbers = random.randint(1,50)
    while numbers in lottery_numbers:
        numbers = random.randint(1, 50)

    lottery_numbers.append(numbers)
lottery_numbers.sort()

print(lottery_numbers)
