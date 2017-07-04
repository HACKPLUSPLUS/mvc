SELECT * FROM `marketing_campagnes`
WHERE `campagne_start` <= NOW()
AND `campagne_eind` >= NOW()
AND (`cruise_ids` LIKE '163661,%' OR `cruise_ids` LIKE '%,163661,%' OR `cruise_ids` LIKE '%,163661' OR `cruise_ids` = '163661')
AND `actief`='Y'
ORDER BY `id` ASC