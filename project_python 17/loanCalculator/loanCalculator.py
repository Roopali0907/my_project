from tkinter import *

class LoanCalculator:
    def __init__(self):
        #create the window here
        window = Tk()

        #create the title
        window.title("Loan calculator")

        #set the background color
        window.configure(background="light green")

        #creating the labels
        Label(window,font="Helvetica 12 bold",bg="light green",text="Annual Interet Rate").grid(row=1,column=1,sticky=W)
        Label(window,font="Helvetica 12 bold",bg="light green",text="Number of Year").grid(row=2,column=1,sticky=W)
        Label(window,font="Helvetica 12 bold",bg="light green",text="Loan amount").grid(row=3,column=1,sticky=W)
        Label(window,font="Helvetica 12 bold",bg="light green",text="Monthly payment").grid(row=4,column=1,sticky=W)
        Label(window,font="Helvetica 12 bold",bg="light green",text="Total payment").grid(row=5,column=1,sticky=W)
        
        # creating th entry widgets

        self.annualInterestRateVar = StringVar()
        Entry(window,textvariable=self.annualInterestRateVar,justify=RIGHT).grid(row=1,column=2)

        self.numberOfYearVar = StringVar()
        Entry(window,textvariable=self.numberOfYearVar,justify=RIGHT).grid(row=2,column=2)

        self.LoanAmountVar = StringVar()
        Entry(window,textvariable=self.LoanAmountVar,justify=RIGHT).grid(row=3,column=2)

        self.MonthlyPaymentVar = StringVar()
        lblMonthlyPayment = Label(window,font="Helvetica 12 bold",textvariable=self.MonthlyPaymentVar).grid(row=4,column=2,sticky=E)

        self.TotalPaymentVar = StringVar()
        lbltotalPayment = Label(window,font="Helvetica 12 bold",textvariable=self.TotalPaymentVar).grid(row=5,column=2,sticky=E)

        #creating a buttons
        btComputePayment = Button(window,text="compute payment",bg="pink",fg="white",font="Helvetica 12 bold",command=self.computePayment).grid(row=6,column=2,sticky=E)

        btClear = Button(window,text="Clear",bg="green",fg="white",font="Helvetica 12 bold",command=self.delete_All).grid(row=6,column=8,padx = 25, pady = 25 , sticky=E)

        window.mainloop()

    #compute the total payment 
    def computePayment(self):
        monthlyPayment = self.getMonthlyPayment(
            float(self.LoanAmountVar.get()),
            float(self.annualInterestRateVar.get())/1200,
            int(self.numberOfYearVar.get()))

        self.MonthlyPaymentVar.set(format(monthlyPayment,'10.2f'))
        totalPayment = float(self.MonthlyPaymentVar.get())* 12 \
         * int(self.numberOfYearVar.get())

        self.TotalPaymentVar.set(format(totalPayment,'10.2f'))
    
#get the monthly payment
    def getMonthlyPayment(self,loanAmount,MonthlyInterestRate,numberofYears):
        monthlyPayment = loanAmount * MonthlyInterestRate  / (1-1/(1 + MonthlyInterestRate) ** (numberofYears * 12))
        return monthlyPayment

#clear all the payment 
    def delete_All(self):
        self.MonthlyPaymentVar.set("")
        self.LoanAmountVar.set("")
        self.annualInterestRateVar.set("")
        self.numberOfYearVar.set("")
        self.TotalPaymentVar.set("")


LoanCalculator()