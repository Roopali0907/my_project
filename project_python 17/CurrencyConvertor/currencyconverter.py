from tkinter import*
class CurrencyConvertor:
    def __init__(self):
        window = Tk()
        window.title(CurrencyConvertor)
        window.configure(bg = "lightblue")
        Label(window,font = "Helvetica 13 bold", bg = "lightblue" ,border=2, text = "Amount to Convert:") .grid(row = 1,column = 1,sticky = W)
        Label(window,font = "Helvetica 13 bold", bg = "lightblue" , text = "Conversion Rate:") .grid(row = 2,column = 1,sticky = W)
        Label(window,font = "Helvetica 13 bold", bg = "lightblue" , text = "Converted Amount:") .grid(row = 3,column = 1,sticky = W)

        self.amounttoconvertVar = StringVar()
        Entry(window,textvariable = self.amounttoconvertVar,justify = RIGHT) .grid(row=1,column = 2)
        self.ConversionRateVar = StringVar()
        Entry(window,textvariable = self.ConversionRateVar,justify = RIGHT) .grid(row=2,column = 2)
        self.ConvertedAmountVar = StringVar()
        convertedAmount = Label(window,font = "Helvetica 12 bold", bg = "lightblue" , textvariable = self.ConvertedAmountVar).grid(row = 3,column= 2,sticky = E)
        btconvertedAmount = Button(window,text = "Convert",font = "Helvetica 12 bold", bg = "lightpink" ,fg="white", command = self.convertedAmount).grid(row = 4,column = 2,sticky = E)

        btDeleteAll = Button(window,text = "Clear",font = "Helvetica 12 bold", bg = "lightgreen" ,fg="white", command = self.DeleteAll).grid(row = 4,column = 6,padx = 25 , pady = 25 , sticky = E)

        window.mainloop()

    def convertedAmount(self):
        amt = float(self.ConversionRateVar.get())
        ConvertedAmountVar = float(self.amounttoconvertVar.get())*amt
        self.ConvertedAmountVar.set(format(ConvertedAmountVar,'10.2f'))

    def DeleteAll(self):
        self.amounttoconvertVar.set("")
        self.ConversionRateVar.set("")
        self.ConvertedAmountVar.set("")

CurrencyConvertor()
