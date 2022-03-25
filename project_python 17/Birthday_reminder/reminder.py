from fileinput import filename
import time
import os

birthdayfile = 'Birthday_reminder/Birthday.txt'

def CheckTodaysBirthdays():
    filename = open(birthdayfile, 'r')
    today = time.strftime('%m%d')
    flag = 0
    for line in filename:
        if today in line:
            line = line.split('  ')
            flag = 1
            print("Birthdays for Today: " + line[1] +' '+line[2] + ' ')

        if flag == 0:
            print("No Birthdays Today!!!")

if __name__ == '__main__':
    CheckTodaysBirthdays()