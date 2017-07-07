SELECT * FROM srchs
INNER JOIN flghts ON flghts.search_id = srchs.id
WHERE srchs.id = 1;