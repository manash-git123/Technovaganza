import numpy as np
import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt
!/usr/bin/env python
result = pd.read_excel("result.xls")

spi = result['SPI']
spi = spi[2:]
name = result['NAME']
name = name[2:]
spi.head(),name.head()

result.head()

fig = sns.kdeplot(spi, shade=True);
fig.figure.savefig("out.png")
