import tkinter as tk

win = tk.Tk()
win.geometry("850x500")


scb1 = tk.Scrollbar(win)
txt1 = tk.Text(win, height=30, width=350, wrap=tk.NONE)
scb1.pack(side=tk.RIGHT, fill=tk.Y)
scb1.config(command=txt1.yview)

scb2 = tk.Scrollbar(win, orient="horizontal")
scb2.pack(side=tk.BOTTOM, fill=tk.X)
scb2.config(command=txt1.xview)
txt1.config(xscrollcommand=scb2.set, yscrollcommand=scb1.set)

with open("U:\\PanTadeusz.txt", "rt", encoding="utf-8") as am:
    tekst=am.read()

txt1.tag_configure('bldItal', font=('Arial', 12, 'bold', 'italic'))    #to lub to poniżej
txt1.tag_configure('kolor', foreground='#476042', font=('Tempus Sans ITC', 12, 'bold'))
txt1.insert(tk.END, tekst, 'kolor')   # kolor lub blItal
txt1.pack()

from tkinter import messagebox as mb
def wyjście():
    if mb.askokcancel(title='Małe pytanko:', message='Czy na pewno chcesz zakończyć działanie programu?'):
        win.quit()
        win.destroy()

win.protocol('WM_DELETE_WINDOW', wyjście)  # reakcja na 'X'

tk.mainloop()
