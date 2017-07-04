SELECT `id`, `cruise_ids`, `duur`, `alias`, `exclude_cruisepagina` FROM `packages_manual`
WHERE `begindatum` <= NOW()
AND `einddatum` >= NOW()
AND `actief`='Y'
AND `exclude_cruisepagina`='Y'