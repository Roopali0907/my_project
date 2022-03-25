from cgitb import text
from distutils.log import error
from tkinter import *
from turtle import width

class Application(Frame):
    def __init__(self,master):
        super(Application,self).__init__(master)
        self.task=""
        self.UserIn = StringVar()
        self.grid()
        self.create_widgets()
    
    def create_widgets(self):
          # User input stored as an Entry widget.
        self.user_input = Entry(self,bg="light pink", bd= 29,
        insertwidth = 4 ,width= 24,
        font = ("verdana",20,"bold"),textvariable= self.UserIn,justify = RIGHT)
        self.user_input.grid(columnspan= 4)
        self.user_input.insert(0,"0")
        #button 7
        self.Button1 = Button(self,bg="light green", bd= 12,text="7",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(7))
        self.Button1.grid(row = 2 ,column = 0,sticky=W)

        #button 8
        self.Button2 = Button(self,bg="light green", bd= 12,text="8",padx=35,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(8))
        self.Button2.grid(row = 2 ,column = 1,sticky=W)

         #button 9
        self.Button3 = Button(self,bg="light green", bd= 12,text="9",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(9))
        self.Button3.grid(row = 2 ,column = 2,sticky=W)

         #button 4
        self.Button4 = Button(self,bg="light green", bd= 12,text="4",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(4))
        self.Button4.grid(row = 3 ,column = 0,sticky=W)

         #button 5
        self.Button5 = Button(self,bg="light green", bd= 12,text="5",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(5))
        self.Button5.grid(row = 3 ,column = 1,sticky=W)

         #button 6
        self.Button6 = Button(self,bg="light green", bd= 12,text="6",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(6))
        self.Button6.grid(row = 3 ,column = 2,sticky=W)

         #button 1
        self.Button7 = Button(self,bg="light green", bd= 12,text="1",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(1))
        self.Button7.grid(row = 4 ,column = 0,sticky=W)

         #button 2
        self.Button8 = Button(self,bg="light green", bd= 12,text="2",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(2))
        self.Button8.grid(row = 4 ,column = 1,sticky=W)

         #button 3
        self.Button9 = Button(self,bg="light green", bd= 12,text="3",padx=33,
        pady=25, font = ("Helvetica",20,"bold"),command= lambda :self.buttonClick(3))
        self.Button9.grid(row = 4 ,column = 2,sticky=W)

         #button 0
        self.Button0 = Button(self,bg="light green", bd= 12,text="0",padx=33,
        pady=25, font = ("serif",20,"bold"),command= lambda :self.buttonClick(0))
        self.Button0.grid(row = 5 ,column = 0,sticky=W)

        # Operator buttons
        #button addition +

        self.ButtonAdd = Button(self,bg="light green", bd= 12,text="+",padx=33,
        pady=25, font = ("serif",20,"bold"),command= lambda :self.buttonClick("+"))
        self.ButtonAdd.grid(row = 2 ,column = 3,sticky=W)

         #button -
        self.ButtonSub = Button(self,bg="light green", bd= 12,text="-",padx=33,
        pady=25, font = ("serif",20,"bold"),command= lambda :self.buttonClick("-"))
        self.ButtonSub.grid(row = 3 ,column = 3,sticky=W)

         #button *
        self.ButtonMul = Button(self,bg="light green", bd= 12,text="*",padx=33,
        pady=25, font = ("serif",20,"bold"),command= lambda :self.buttonClick("*"))
        self.ButtonMul.grid(row = 4 ,column = 3,sticky=W)

        #button /
        self.ButtonDiv = Button(self,bg="light green", bd= 12,text="/",padx=33,
        pady=25, font = ("serif",20,"bold"),command= lambda :self.buttonClick("/"))
        self.ButtonDiv.grid(row = 5 ,column = 3,sticky=W)

        #button equal
        self.ButtonEqual = Button(self,bg="gray", bd= 12,text="=",padx=100,
        pady=25, font = ("serif",20,"bold"),command=self.calculateTask)
        self.ButtonEqual.grid(row = 5 ,column = 1,sticky=W,columnspan=2)

         #button clear
        self.ButtonClear = Button(self,bg="gray", bd= 12,text="AC",width=28,
        padx=7, font = ("serif",20,"bold"),command=self.ClearDisplay)
        self.ButtonClear.grid(row = 1 ,sticky=W,columnspan=4)

    def buttonClick(self,number):
        self.task = str(self.task) + str(number)
        self.UserIn.set(self.task)

    def calculateTask(self):
        self.data = self.user_input.get()
        try:
            self.answer = eval(self.data)
            self.displaytext(self.answer)
            self.task = self.answer
        except SyntaxError as e:
            self.displaytext("Invalid Syntax")
            self.task=""


    def displaytext(self,value):
        self.user_input.delete(0,END)
        self.user_input.insert(0,value)
    
    def ClearDisplay(self):
        self.task=""
        self.user_input.delete(0,END)
        self.user_input.insert(0,"0")

calculator = Tk()
calculator.title("calculator")
app = Application(calculator)
# Make window fixed (cannot be resized)
calculator.resizable(width=False,height=False)
calculator.mainloop()


