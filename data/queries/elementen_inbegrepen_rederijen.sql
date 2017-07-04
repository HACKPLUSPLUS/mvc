SELECT data_rederijen.inbegrepen FROM data_rederijen WHERE data_rederijen.id = 14;
SELECT * FROM elementen_inbegrepen
WHERE FIND_IN_SET(elementen_inbegrepen.id, (SELECT data_rederijen.inbegrepen FROM data_rederijen WHERE data_rederijen.id = 14));