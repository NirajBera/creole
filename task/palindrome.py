a=int(input("Enrer value = "))
temp=a
no=0
while(a!=0):
    rem=a%10
    a=a//10
    no=(no*10)+rem
    
if(no==temp):
    print("Yes,number is palindrome.")
else:
    print("no, number is not palindrome")
    
