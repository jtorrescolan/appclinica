SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00069403648376465

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00087690353393555

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00072407722473145

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054788589477539

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00076818466186523

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00045299530029297

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00034594535827637

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063896179199219

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059795379638672

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.12881994247437

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.027568101882935

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010440349578857

call sp_lista_secretaria(18) 
 Execution Time:0.43960499763489

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.012964963912964

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00062298774719238

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0079970359802246

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0012969970703125

call sp_lista_secretaria(18) 
 Execution Time:0.0016241073608398

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00093197822570801

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0052149295806885

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00093698501586914

call sp_lista_secretaria(18) 
 Execution Time:0.02592396736145

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00037598609924316

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00031185150146484

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.00070619583129883

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.00074601173400879

call sp_lista_secretaria(18) 
 Execution Time:0.00090599060058594

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010018348693848

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00093293190002441

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009620189666748

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00060296058654785

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00048685073852539

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00041103363037109

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.10234308242798

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.055660009384155

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00040507316589355

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.044318199157715

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.013458967208862

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0004270076751709

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00029110908508301

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00084495544433594

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00045895576477051

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00031208992004395

SELECT
			  tb_secretaria.secretariaid,
			  tb_persona.personaid,
			  tb_persona.nombres,
			  tb_persona.apepaterno,
			  tb_persona.apematerno,
			  tb_persona.nombcompleto,
			  DATE_FORMAT(tb_persona.fechnacimiento,'%Y-%m-%d') as fechnacimiento,
			  tb_persona.domicilio,
			  tb_persona.celular,
			  tb_persona.telefono,
			  tb_persona.dni,
			  tb_distrito.distritoid,
			  tb_provincia.provinciaid,
			  tb_departamento.departamentoid,
			  tb_estadocivil.estadocivilid
			FROM
			  sysclinico.tb_secretaria
			  INNER JOIN sysclinico.tb_persona
			    ON tb_secretaria.personaid = tb_persona.personaid
			  INNER JOIN sysclinico.tb_estadocivil
			    ON tb_persona.estadocivilid = tb_estadocivil.estadocivilid
			  INNER JOIN sysclinico.tb_distrito
			    ON tb_persona.distritoid = tb_distrito.distritoid
			  INNER JOIN sysclinico.tb_provincia
			    ON tb_distrito.provinciaid = tb_provincia.provinciaid
			  INNER JOIN sysclinico.tb_departamento
			    ON tb_provincia.departamentoid = tb_departamento.departamentoid
			    WHERE tb_secretaria.secretariaid=18 
 Execution Time:0.033586978912354

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00043392181396484

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00028204917907715

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.00065302848815918

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.00069689750671387

SELECT
			  tb_secretaria.secretariaid,
			  tb_persona.personaid,
			  tb_persona.nombres,
			  tb_persona.apepaterno,
			  tb_persona.apematerno,
			  tb_persona.nombcompleto,
			  DATE_FORMAT(tb_persona.fechnacimiento,'%Y-%m-%d') as fechnacimiento,
			  tb_persona.domicilio,
			  tb_persona.celular,
			  tb_persona.telefono,
			  tb_persona.dni,
			  tb_distrito.distritoid,
			  tb_provincia.provinciaid,
			  tb_departamento.departamentoid,
			  tb_estadocivil.estadocivilid
			FROM
			  sysclinico.tb_secretaria
			  INNER JOIN sysclinico.tb_persona
			    ON tb_secretaria.personaid = tb_persona.personaid
			  INNER JOIN sysclinico.tb_estadocivil
			    ON tb_persona.estadocivilid = tb_estadocivil.estadocivilid
			  INNER JOIN sysclinico.tb_distrito
			    ON tb_persona.distritoid = tb_distrito.distritoid
			  INNER JOIN sysclinico.tb_provincia
			    ON tb_distrito.provinciaid = tb_provincia.provinciaid
			  INNER JOIN sysclinico.tb_departamento
			    ON tb_provincia.departamentoid = tb_departamento.departamentoid
			    WHERE tb_secretaria.secretariaid=18 
 Execution Time:0.0005500316619873

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00052690505981445

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00051712989807129

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00043392181396484

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.048315048217773

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00049304962158203

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00037097930908203

SELECT
									  tb_medico.medicoid,
									  tb_medico.especialidad,
									  tb_persona.personaid,
									  tb_persona.nombres,
									  tb_persona.apepaterno,
									  tb_persona.apematerno,
									  tb_persona.nombcompleto,
									  DATE_FORMAT(tb_persona.fechnacimiento,'%Y-%m-%d') as fechnacimiento,
									  tb_persona.domicilio,
									  tb_persona.telefono,
									  tb_persona.celular,
									  tb_persona.dni,
									  tb_distrito.distritoid,
									  tb_provincia.provinciaid,
									  tb_departamento.departamentoid,
									  tb_estadocivil.estadocivilid
									FROM
									  sysclinico.tb_distrito
									  INNER JOIN sysclinico.tb_provincia
									    ON tb_distrito.provinciaid = tb_provincia.provinciaid
									  INNER JOIN sysclinico.tb_departamento
									    ON tb_provincia.departamentoid = tb_departamento.departamentoid
									  INNER JOIN sysclinico.tb_persona
									    ON tb_persona.distritoid = tb_distrito.distritoid
									  INNER JOIN sysclinico.tb_medico
									    ON tb_medico.personaid = tb_persona.personaid
									  INNER JOIN sysclinico.tb_estadocivil
									    ON tb_persona.estadocivilid = tb_estadocivil.estadocivilid
									  WHERE tb_medico.medicoid=19 
 Execution Time:0.024312019348145

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00035190582275391

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00030779838562012

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.00064897537231445

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.00083684921264648

SELECT
									  tb_medico.medicoid,
									  tb_medico.especialidad,
									  tb_persona.personaid,
									  tb_persona.nombres,
									  tb_persona.apepaterno,
									  tb_persona.apematerno,
									  tb_persona.nombcompleto,
									  DATE_FORMAT(tb_persona.fechnacimiento,'%Y-%m-%d') as fechnacimiento,
									  tb_persona.domicilio,
									  tb_persona.telefono,
									  tb_persona.celular,
									  tb_persona.dni,
									  tb_distrito.distritoid,
									  tb_provincia.provinciaid,
									  tb_departamento.departamentoid,
									  tb_estadocivil.estadocivilid
									FROM
									  sysclinico.tb_distrito
									  INNER JOIN sysclinico.tb_provincia
									    ON tb_distrito.provinciaid = tb_provincia.provinciaid
									  INNER JOIN sysclinico.tb_departamento
									    ON tb_provincia.departamentoid = tb_departamento.departamentoid
									  INNER JOIN sysclinico.tb_persona
									    ON tb_persona.distritoid = tb_distrito.distritoid
									  INNER JOIN sysclinico.tb_medico
									    ON tb_medico.personaid = tb_persona.personaid
									  INNER JOIN sysclinico.tb_estadocivil
									    ON tb_persona.estadocivilid = tb_estadocivil.estadocivilid
									  WHERE tb_medico.medicoid=19 
 Execution Time:0.00066089630126953

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0015468597412109

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00045514106750488

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00031304359436035

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00049901008605957

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00039100646972656

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.028784036636353

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.053735017776489

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%f%' 
 Execution Time:0.033993005752563

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fd%' 
 Execution Time:0.0004270076751709

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fdf%' 
 Execution Time:0.00045394897460938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fdfd%' 
 Execution Time:0.00047612190246582

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fdfdf%' 
 Execution Time:0.00041913986206055

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fdfd%' 
 Execution Time:0.00038504600524902

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fdf%' 
 Execution Time:0.00042009353637695

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fd%' 
 Execution Time:0.00039982795715332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%f%' 
 Execution Time:0.00042200088500977

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00043201446533203

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00050091743469238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00044488906860352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00043296813964844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00044584274291992

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00043892860412598

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00043988227844238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00043296813964844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00040888786315918

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00042390823364258

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00045013427734375

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00050091743469238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.0004270076751709

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00043892860412598

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00043606758117676

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00039505958557129

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00044393539428711

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00044798851013184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00043296813964844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00045394897460938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00042605400085449

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00044488906860352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00044488906860352

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00064706802368164

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.00094985961914062

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%f%' 
 Execution Time:0.00038385391235352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%ff%' 
 Execution Time:0.00046300888061523

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fff%' 
 Execution Time:0.00042200088500977

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fffg%' 
 Execution Time:0.00043511390686035

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
WHERE `especialidad` =  'Traumatologia' 
 Execution Time:0.00052499771118164

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%fff%' 
 Execution Time:0.00067615509033203

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%ff%' 
 Execution Time:0.00048112869262695

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%f%' 
 Execution Time:0.00047087669372559

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00049901008605957

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00048708915710449

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jor%' 
 Execution Time:0.00039196014404297

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorg%' 
 Execution Time:0.00040578842163086

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge%' 
 Execution Time:0.00042891502380371

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorg%' 
 Execution Time:0.00078392028808594

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jor%' 
 Execution Time:0.0007319450378418

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00070095062255859

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00071096420288086

