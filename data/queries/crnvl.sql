SELECT * FROM data_rederijen
WHERE rederij = 'Carnival Cruise Lines';
SELECT * FROM data_cruises
LEFT JOIN data_rederijen ON data_cruises.rederij_id = data_rederijen.id
WHERE data_cruises.rederij_id = '17';