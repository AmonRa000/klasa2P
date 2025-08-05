# First download and install: pip install mysql-connector-python
import mysql.connector

def druk(field, lgth):
    txt=str(field) + ''.center(50)
    print(txt[:lgth],end='\t')
    

conn = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="baza_testowa"
)

cur = conn.cursor()
cur.execute('''SELECT customer.id,  \
                    customer.name,\
                    customer.country,\
                    region.name,\
                    emp.last_name \
                    FROM customer\
                    INNER JOIN dept\
                    ON customer.region_id = dept.region_id\
                    INNER JOIN emp \
                    ON dept.id = emp.dept_id\
                    INNER JOIN region\
                    ON region.id = dept.region_id\
                    WHERE region.name = 'Asia' AND customer.name LIKE 'A%';''')

print('ID\tNazwa\t\tKraj\t\tRegion\tNazwisko')
print('---------------------------------------------------------------------------------------------------------------------------------------------')
wynik = cur.fetchall()

for rek in wynik:
        druk(rek[0], 5)
        druk(rek[1], 15)
        druk(rek[2], 15)
        druk(rek[3], 11)
        druk(rek[4], 10)
        print()
cur.close()
