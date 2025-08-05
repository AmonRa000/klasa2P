import tkinter as tk
from tkinter import messagebox as mb
import mysql.connector

def wyjście():
    if mb.askokcancel(title='Małe pytanko:', message='Czy na pewno chcesz zakończyć działanie programu?'):
        win.quit()
        win.destroy()

conn = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="baza_testowa"
)

cur = conn.cursor()
cur.execute('''SELECT customer.id, customer.name, customer.country, emp.last_name, dept.name FROM customer
INNER JOIN emp
ON customer.id = emp.id
INNER JOIN dept
ON emp.dept_id = dept.name
WHERE
customer.city ="Kielce" or  customer.city ="Radom"''')

wynik = cur.fetchall()

rows = len(wynik)
columns = 6

cur.close()

win = tk.Tk()
win.title("Python-MySQL")
win.geometry("740x530")
win.grid_rowconfigure(0, weight=1)
win.columnconfigure(0, weight=1)

frMain = tk.Frame(win)
frMain.grid(sticky='news')

frHead = tk.Frame(frMain)
frHead.grid(sticky='news')

lgths=[5,5,15,12,20,12]
header=['Lp.','ID','Nazwa','Kraj','Nazwisko opiekuna','Departament']

hdFields = [[tk.Text() for j in range(columns)]]
for ii in range(0, columns):
        hdFields[0][ii] = tk.Text(frHead, height=1, width=lgths[ii], wrap=tk.NONE,background='lightgrey')
        hdFields[0][ii].tag_configure('fntheader', foreground='blue', font=('Arial', 11, 'bold'))
        hdFields[0][ii].insert(tk.END, header[ii],'fntheader')
        hdFields[0][ii].config(state= tk.DISABLED) 
        hdFields[0][ii].grid(row=0, column=ii, sticky='news')

# Create a frame for the canvas with non-zero row&column weights
frame_canvas = tk.Frame(frMain)
frame_canvas.grid(row=2, column=0, pady=(5, 0), sticky='nw')
frame_canvas.grid_rowconfigure(0, weight=1)
frame_canvas.grid_columnconfigure(0, weight=1)
# Set grid_propagate to False to allow 5-by-5 Fields resizing later
frame_canvas.grid_propagate(False)

# Add a canvas in that frame
canvas = tk.Canvas(frame_canvas, bg="yellow")
canvas.grid(row=0, column=0, sticky="news")

# Link a scrollbar to the canvas
vsb = tk.Scrollbar(frame_canvas, orient="vertical", command=canvas.yview)
vsb.grid(row=0, column=1, sticky='ns')
canvas.configure(yscrollcommand=vsb.set)

# Create a frame to contain the Fields
frFields = tk.Frame(canvas, bg="blue")
canvas.create_window((0, 0), window=frFields, anchor='nw')

# Add Fields to the frame
jj=0
Fields = [[tk.Text() for ii in range(columns)] for jj in range(rows)]
for rek in wynik:
    if (jj+1) % 3 == 0:
        bgr='lightgrey'
    else:
        bgr='white'
    ii=0   
    Fields[jj][0] = tk.Text(frFields, height=1, width=lgths[ii], wrap=tk.NONE,background=bgr)
    Fields[jj][0].tag_configure('fntlp', foreground='black', font=('Tempus Sans ITC', 10, 'italic'))
    Fields[jj][0].insert(tk.END, str(jj+1) + '.','fntlp')
    Fields[jj][0].config(state= tk.DISABLED) 
    Fields[jj][0].grid(row=jj, column=ii, sticky='news')
    ii+=1
    for kol in rek:
        Fields[jj][ii] = tk.Text(frFields, height=1, width=lgths[ii], wrap=tk.NONE,background=bgr)
        Fields[jj][ii].tag_configure('fntdt', foreground='#406040',  font=('Tempus Sans ITC', 10))
        Fields[jj][ii].insert(tk.END, str(kol),'fntdt')
        Fields[jj][ii].grid(row=jj, column=ii, sticky='news')
        ii+=1
    jj+=1
# Update Fields frames idle tasks to let tkinter calculate Fields sizes
frFields.update_idletasks()

# Resize the canvas frame to show exactly 5-by-5 Fields and the scrollbar
fldWidth = sum([Fields[0][j].winfo_width() for j in range(0, rows)])
fldHeight = sum([Fields[i][0].winfo_height() for i in range(0, len(wynik))])    #<----Index
frame_canvas.config(width=fldWidth + vsb.winfo_width(), height=fldHeight)

# Set the canvas scrolling region
canvas.config(scrollregion=canvas.bbox("all"))

win.protocol('WM_DELETE_WINDOW', wyjście)  # reakcja na 'X'

# Launch the GUI
win.mainloop()
