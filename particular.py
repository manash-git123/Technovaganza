import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
import sys

z = sys.argv[1]
k = z.split(",")
x=[]
for j in range(len(k)):
    x.append(float(k[j]))

size = len(x)
y  =[]

for i in range(size):
    
    y.append(str(i+1)+"sem")

report = pd.DataFrame({'SPI': x , 'Semester': y})
sns.set(style="whitegrid")
ax = sns.barplot(x='SPI' , y='Semester' , data = report)

ax.figure.savefig("report.png")

    
