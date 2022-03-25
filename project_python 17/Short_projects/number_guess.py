import random

guesses = []

mycomputer = random.randint(1, 70)

player = int(input("Enter a number between 1-70: "))
guesses.append(player)

while player != mycomputer:
    if player > mycomputer:
        print("Number is high!")
    
    else:
        print("Number is low!")
    player = int(input("Enter a number between 1-70: "))
    guesses.append(player)

    length = len(guesses)
else:
    print("You have guessed right, Good Job!")
    print("You took {} guesses".format(length))
    print("These were your guesses", guesses)
