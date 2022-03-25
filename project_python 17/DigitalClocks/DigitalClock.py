#import module tkinter

from logging import root
from sre_parse import expand_template
from struct import pack
from textwrap import fill
from tkinter import *
from time import strftime
from tkinter import font

#create tkinter window
root = Tk()
root.title('Digital computer clock')

# used to create label
def time():
    string = strftime("%H:%M:%S%p")
    lbl.config(text = string)
    lbl.after(1000,time)

#styling the label widgets which display the clock
lbl = Label(root,font = ("arial",160, "bold"),bg="black",fg="white")
#pack method in tkinter pack into row and column 
lbl.pack(anchor = "center" ,fill = "both",expand = 1)

time()            #time function is called

mainloop()        #Run the application program