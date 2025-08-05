import tkinter as tk
from tkinter import Menu
from tkinter import messagebox as mb
from tkinter.filedialog import askopenfilename, asksaveasfilename

tekst=""
win = tk.Tk()
win.title("Python-Moduł Tkinter")
win.geometry("900x400")

def wyjście():
    if mb.askokcancel(title='Małe pytanko', message='Na pewno chcesz zakończyć działanie programu?'):
        win.quit()
        win.destroy()

def plikOtwórz():
    tekst = ""
    name = askopenfilename()
    if name!='':
        infile = open(name, 'rt', encoding='utf-8')
        for linia in infile:
            tekst+=linia
            if len(linia) > 65535:
                print('Plik zbyt duży, wczytano pierwsze 65535 bajtów')
                break
        infile.close()
        txt1.insert(1.0, tekst, 'kolor')

def plikZapisz():
    pass

def plikZapiszJako():
    name = asksaveasfilename()

#Menu: 
głmnu=Menu(win)
win.config(menu=głmnu)
plikMenu=Menu(głmnu)
głmnu.add_cascade(label="Plik", menu=plikMenu)
plikMenu.add_command(label="Otwórz",  command=plikOtwórz)
plikMenu.add_command(label="Zapisz", command=plikZapisz)
plikMenu.add_command(label="Zapisz jako",  command=plikZapiszJako)
plikMenu.add_separator()
plikMenu.add_command(label="Wyjście", command=wyjście)

txt1 = tk.Text(win, height=30, width=350, wrap=tk.NONE)

#Pole tekstowe:
txt1.tag_configure('bldItal', font=('Arial', 12, 'bold', 'italic'))    #to lub to poniżej
txt1.tag_configure('kolor', foreground='#476042', font=('Tempus Sans ITC', 12, 'bold'))
#txt1.insert(tk.END, tekst, 'kolor')
txt1.tag_bind('info', '<1>',  lambda e, t=txt1: t.insert(tk.END, "Aktualnie brak informacji!\n"))
txt1.insert(tk.END, '\ninformacja\n', 'info')
txt1.pack()

win.mainloop()
