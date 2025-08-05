from datetime import datetime
import random
temperatura = 0
for i in range(0,30):
    rand = random.randrange(-20,30,1)
    print(i)
data = datetime.now()
if(round(data.minute) == 0 or round(data.minute) == 15 or round(data.minute) == 30 or round(data.minute) == 45):
    print()
else:
    print()