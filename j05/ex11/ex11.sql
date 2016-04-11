SELECT UCASE(fiche_personne.nom) AS NOM,fiche_personne.prenom,abonnement.prix 
FROM fiche_personne,membre,abonnement 
WHERE membre.id_membre = fiche_personne.id_perso 
AND abonnement.id_abo = membre.id_abo 
AND abonnement.prix > 42 
ORDER BY nom ASC,prenom ASC;