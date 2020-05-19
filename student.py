import matplotlib.pyplot as plt
import sys

var1 = sys.argv[1]
var2 = sys.argv[2]
k = var1[:-1].split(",")
l = var2[:-1].split(",")
x=[]
y=[]
for j in range(len(k)):
    x.append(float(k[j]))

size = len(x)

for i in range(len(l)):
    y.append((l[i]))

z = [0.1]*size

plt.title('YOUR CURRENT SUBJECT STATISTICS')
plt.pie(x, explode=z, labels=y, autopct='%1.1f%%',shadow=True, startangle=90)

plt.savefig("pout.png")
