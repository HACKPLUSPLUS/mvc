SELECT * FROM data_hut_codes
WHERE rederij_id = 25 and schip_id = 146;
/*SELECT * FROM data_schepen WHERE id = 146;*/
SELECT * FROM data_hut_nummers
LEFT JOIN data_hut_codes ON data_hut_codes.code = data_hut_nummers.categorie_code
WHERE data_hut_nummers.rederij_id = 25
AND data_hut_nummers.schip_id = 146
AND data_hut_nummers.categorie_code = 'VF'
AND data_hut_nummers.hutnummer = 8002;
SELECT DISTINCT(data_hut_nummers.hutnummer) FROM data_hut_codes
INNER JOIN data_hut_nummers ON data_hut_nummers.categorie_code = data_hut_codes.code
WHERE data_hut_codes.code = 'VF';
SELECT * FROM data_hut_codes
INNER JOIN data_hut_nummers ON data_hut_nummers.categorie_code = data_hut_codes.code
WHERE data_hut_codes.code = 'VF';
/*AND data_hut_nummers.dek = 8;*/