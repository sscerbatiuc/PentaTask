OOP Task - Created by Sergiu Mocanas

Sarcina lucrării: Ca obiect de baza de la care pornim partea practica va fi un caz clasic – automobil. 
Dar il vom dezvolta pentru ca sa aplicam prin el cit mai multe practici OOP.

Avem automobile de clasa diferite, cu niste optiuni de baza: 
A-class - 16000Euro: conditioner 6 airbag-uri 
B-class - 25000euro: conditioner 6 airbag-uri 
C-class - 28000euro: clima 6 airbag-uri Cruise - control 
E-class – 40000 euro: clima xenon sensori ploaie 8 airbag-uri Parctronic Cruise - control 
S-class - 55000euro: clima cu 2 zone xenon scaune reglabile electric Calculator de bord sonsori ploaie sensori lumina 10 airbag-uri salon din piele Parctronic Cruise - control

Toate automobile au niste optiuni default: 
1. MP3 
2. oglinzi electrice 
3. lacat centralizat 
4. geamuri electrice 
5. faruri anticeata 
6. Oglinzi cu încălzire

Pentru o plata suplimentara, orice automobil poate fi echipat cu orice optiune din lista:

Faruri xenon : 500euro 
Volan multifuncțional: 600euro 
Parctronic - 250euro 
Senzor de ploaie - 300euro 
Senzor de lumină - 150euro 
Alarmă antifurt - 300euro 
Jante aliaj ușor - 1000euro 
Scaune cu încălzire- 500 euro 
Cruise - control – 1000 euro 
Calculator de bord – 1500 euro

Functionalitati:

I putem crea mai multe automobile(obiecte), pe care mai apoi sa le gestionam (ar fi ok aici un factory pattern)
II clasa de baza din care pornim (Factory class) ar fi un singleton class (singleton pattern)
III trebuie sa avem posibilitatea sa scoatem toate masinile
IV pentru orice masina sa putem vizualiza optiunile
V pentru orice masina sa putem adauga optiuni noi, si sa le stergem
VI nu putem sterge optiunile default al masinei
VII pentru orice masina sa afizam pretul (luind in calcul optiunile noi)

REDUCERE SARBATORI: periodale 15 decembrie – 15 ianuarie – reducere 15% din pretul masinei
REDUCERI VIP: pentru orice masina de luat in calcul o alta reducere pentru clientii VIP – 1000euro.
pentru clientii VIP care cumpara in perioada 15 decembrie – 15 ianuarie, 
mai intii se aplica REDUCERE VIP, dupa asta urmeaza REDUCERE SARBATORI
 (ordinea reducerilor – interfata de ordering )