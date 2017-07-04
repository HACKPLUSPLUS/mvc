SELECT * FROM data_prijzen;
SELECT * FROM data_prijzen
INNER JOIN data_cruises ON data_cruises.id = data_prijzen.cruise_id;