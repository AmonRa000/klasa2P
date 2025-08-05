import tkinter as tk

win = tk.Tk()
win.geometry("750x500")

lab = tk.Label(win, text="Cześć Pytony!").pack(side ='bottom')
logo = tk.PhotoImage(file="U:\\ZSI.png")   #2
napis='''WSZYSTKICH WITA SERDECZNIE'''
lab1= tk.Label(win, 
              compound=tk.CENTER,
              image=logo,
              text=napis,
              fg="blue",
              font="Verdana 12 bold").pack(side="left")
counter = 0 
def counter_label(label):
  def count():
    global counter
    counter += 1
    label.config(text=str(counter))
    label.after(100, count)
  count()

win.title("Counting Seconds")
lab1 = tk.Label(win, fg="green")
lab1.pack()
counter_label(lab1)
but1 = tk.Button(win, text='Stop', width=25, command=win.destroy)
but1.pack()
win.mainloop()
