SELECT MD5(CONCAT(REPLACE(telephone,7,9),42)) AS ft5 
FROM distrib 
WHERE id_distrib = 84;