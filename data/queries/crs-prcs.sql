SELECT * FROM data_prijzen;
SELECT * FROM data_prijzen
INNER JOIN data_cruises ON data_cruises.id = data_prijzen.cruise_id
INNER JOIN data_hut_codes ON data_hut_codes.id = data_prijzen.hut_id
WHERE data_cruises.begindatum > '2017-08-01'
AND data_cruises.rederij_id = '25'
AND data_cruises.id = 151561
AND data_prijzen.prijs = '1198,00';