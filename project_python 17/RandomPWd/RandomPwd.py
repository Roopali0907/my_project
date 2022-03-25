import string
import random

def RandomPwd():
    chars = string.ascii_letters + string.digits
    size = 3
    return ''.join(random.choice(chars) for x in range(size,25))

n = 0
while n < 50:
    print(RandomPwd())
    n = n + 1
