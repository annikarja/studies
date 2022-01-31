import pandas as pd
import csv

columns = ['Numero', 'Nimi', 'Valmistaja', 'Pullokoko', 'Hinta', 'Litrahinta', 'Tyyppi', 'Valmistusmaa', 'Vuosikerta', 'Alkoholi-%', 'Energia kcal/100 ml']

df1 = pd.DataFrame(pd.read_excel("alkon-hinnasto.xlsx", engine='openpyxl', skiprows=3))

df1.to_csv("alkon-hinnasto.csv",
                index=False,
                header=True,
                columns=columns,
                sep=';',
                encoding='utf-8',
                )
