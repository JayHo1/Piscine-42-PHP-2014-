SELECT nom, prenom 
FROM fiche_personne 
WHERE (nom LIKE '%-%' AND prenom LIKE '%') OR (prenom LIKE '%-%' AND nom LIKE '%') 
 OR (prenom LIKE '%-%' AND nom LIKE '%-%') 
 WHERE
ORDER BY nom, prenom;