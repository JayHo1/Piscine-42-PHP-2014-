SELECT nom
FROM distrib
WHERE id_distrib = 42
OR id_distrib REGEXP '([6][2-9])' 
OR id_distrib = 71
OR id_distrib '([8][8-9])'
OR id_distrib = 90;
OR LIKE '%y%y%'
LIMIT 5 offset 2;

