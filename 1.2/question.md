#1.2.   
###Que penses-tu de cette approche, point de vue pratique, mais aussi conceptuel ?  
###Y trouves-tu des inconvénients ?  
###Lesquels ?  

L'approche est sympa en terme de lisibilité mais le code est très redondant, en terme de conception trop volumineux pour le travail à effectuer.

Oui, je trouve qu'il y a des inconvéniants:
- avoir une méthode lié a un chiffre en particulier
- limite des calculs possible via les méthodes développées.
- code redondant
 
Je propose une première solution qui déplace le code redondant dans une méthode calculate($value), ca paramètre contient jsute la valeur que l'on souhaite utiliser.
