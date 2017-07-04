SELECT DISTINCT `data_cruises`.`id`,
    `data_cruises`.`begindatum`,
    `data_cruises`.`cruisecode`,
    `data_cruises`.`vaarroute`,
    `data_cruises`.`vaarroute_img`,
    `data_bestemmingen`.`bestemming` AS bestemming_naam,
    `data_rederijen`.`rederij` AS rederij_naam,
    `data_rederijen`.`logo_url` AS logo_url,
    `data_rederijen`.`video_embed` AS video,
    `data_schepen`.`schip` AS schip_naam,
    `data_schepen`.`id` AS schip_id,
    `data_schepen`.`code` AS schip_code,
    `data_schepen`.`video_embed` AS video_schip,
    `data_havens`.`haven` AS haven_naam,
    `data_havens`.`code` AS haven_code
    FROM `data_cruises`
    INNER JOIN `data_bestemmingen` ON `data_cruises`.`bestemming_id`=`data_bestemmingen`.`id`
    INNER JOIN `data_rederijen` ON `data_cruises`.`rederij_id`=`data_rederijen`.`id`
    INNER JOIN `data_schepen` ON `data_cruises`.`schip_id`=`data_schepen`.`id`
    INNER JOIN `data_havens` ON `data_cruises`.`haven_id`=`data_havens`.`id`
    INNER JOIN `data_prijzen` ON `data_prijzen`.`cruise_id`=`data_cruises`.`id`
    WHERE `data_cruises`.`rederij_id`=14
    AND `data_cruises`.`schip_id`=36
    AND `data_cruises`.`haven_id`=82
    AND `data_cruises`.`bestemming_id`=5
    AND `data_cruises`.`duur`=14
    AND `data_cruises`.`vaarroute`='82,105,383,2654,1338,105,4,105,213,105,216,270,105,1223,82'
    AND `data_cruises`.`begindatum`>NOW()
    AND `data_cruises`.`published`='Y'
    AND (`data_prijzen`.`prijs`>0 OR `data_prijzen`.`prijs_manual`>0)
    AND `data_cruises`.`id` NOT IN (163526,163532,163545)
    ORDER BY `begindatum` ASC