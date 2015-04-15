SELECT UPPER(fiche_personne.nom) AS 'NOM', prenom, abonnement.prix
FROM fiche_personne
INNER JOIN membre ON fiche_personne.id_perso = membre.id_membre
INNER JOIN abonnement ON membre.id_abo = abonnement.id_abo
WHERE abonnement.prix > 42
ORDER BY nom, prenom;