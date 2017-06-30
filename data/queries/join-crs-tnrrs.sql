SELECT * FROM lcn_crs
FULL OUTER JOIN lcn_tnrrs ON lcn_crs.sail_id = lcn_tnrrs.sail_id
WHERE lcn_crs.id = 100;