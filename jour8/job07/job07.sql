SELECT * FROM etudiants WHERE DATEDIFF(CURDATE(), naissance) > 18 * 365;

-- csqc