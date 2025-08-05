'''
LOGICZNE

# A     B      AandB  AorB
# True  False  False  True ...
#------------------
var = 1
print(var > 0)
print(not (var <= 0))
print(var != 0)
print(not (var == 0))

#------------------
Prawa De Morgana
not (p and q) == (not p) or (not q)
not (p or q) == (not p) and (not q)
#------------------
#Operatory bitowe
#    & (ampersand) - bitwise conjunction;
#    | (bar) - bitwise disjunction;
#    ~ (tilde) - bitwise negation;
#    ^ (caret) - bitwise exclusive or (xor).

#    & wymaga dokładnie dwóch 1s żeby była 1 jako wynik
#    | wymaga przynajmniej jednej 1 żeby była 1 jako wynik
#    ^ wymaga dokładnie jednej 1 żeby była 1 jako wynik

i 	        00000000000000000000000000001111
j       	00000000000000000000000000010110
bit = i & j 	00000000000000000000000000000110

i 	 	00000000000000000000000000001111
bitneg = ~i 	11111111111111111111111111110000

#zapis skrócony:
x = x & y 	x &= y
x = x | y 	x |= y
x = x ^ y 	x ^= y

# Sprawdzenie bitu:
x & 1 = x
x & 0 = 0
#------------------------------


00101001 bajt -sprawdzamy ustawienie 4go bitu
00001000 maska (operacja &)

flag_register = 0b00101001
the_mask      = 0b00001000
if flag_register & the_mask:
    print('Mój bit jest ustawiony')
else:
    print('Mój bit jest nieustawiony')


#------------------------------

Kasowanie bitu
flag_register = flag_register |  the_mask

flag_register = 0b00101001
the_mask      = 0b11110111
flag_register = flag_register & the_mask
print(bin(flag_register))

#-----------------------------

#Negowanie bitu:
flag_register = flag_register ^ the_mask

flag_register = 0b00101001
the_mask      = 0b11111111 #<-tu negacja wszystkich bitów 
flag_register = flag_register ^ the_mask
print(bin(flag_register))

#-----------------------------

#Ustawianie bitu:

flag_register = 0b00101001
the_mask      = 0b00000100
flag_register = flag_register | the_mask
print(bin(flag_register))
#-----------------------------

#Przesunięcia
# 12345 × 10 = 123450
# 12340 ÷ 10 = 1234

# 17 >> 1 → 17 // 2
# 17 << 2 → 17 * 4

# Priority 	Operator 	
# 1 	~, +, - 	unary
# 2 	** 	
# 3 	*, /, //, % 	
# 4 	+, - 	binary
# 5 	<<, >> 	
# 6 	<, <=, >, >= 	
# 7 	==, != 	
# 8 	& 	
# 9 	| 	
#10 	=, +=, -=, *=, /=, %=, &=, ^=, |=, >>=, <<=

#-------------------

x = 1
y = 0
z = ((x == y) and (x == y)) or not(x == y)
print(not(z))

#-------------------
x = 4
y = 1
a = x & y
b = x | y
c = ~x  # tricky!
d = x ^ 5
e = x >> 2
f = x << 2
print(a, b, bin(x), bin(c), d, e, f)

#========================
'''
