SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00096893310546875

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0007779598236084

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0006718635559082

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0013248920440674

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00073599815368652

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00062012672424316

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `domicilio` asc
LIMIT 10 
 Execution Time:0.0010480880737305

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00072598457336426

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00065207481384277

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `domicilio` desc
LIMIT 10 
 Execution Time:0.0010218620300293

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00072002410888672

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00063514709472656

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00093603134155273

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010249614715576

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00066995620727539

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `domicilio` asc
LIMIT 10 
 Execution Time:0.00089097023010254

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.022571086883545

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084495544433594

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `domicilio` desc
LIMIT 10 
 Execution Time:0.0010080337524414

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080609321594238

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00066804885864258

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `domicilio` asc
LIMIT 10 
 Execution Time:0.00086188316345215

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.03161096572876

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080013275146484

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `domicilio` desc
LIMIT 10 
 Execution Time:0.00087094306945801

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007319450378418

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00063300132751465

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011258125305176

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00073885917663574

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00059795379638672

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00095510482788086

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00067400932312012

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00056099891662598

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00091195106506348

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00097990036010742

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00069689750671387

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00068092346191406

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00076794624328613

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0007779598236084

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00079607963562012

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00075817108154297

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00079894065856934

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00076699256896973

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057005882263184

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0008549690246582

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345679' 
 Execution Time:0.00094509124755859

SELECT *
FROM (`tb_provincia`)
WHERE `departamentoid` =  '15' 
 Execution Time:0.024139881134033

SELECT *
FROM (`tb_distrito`)
WHERE `provinciaid` =  '133' 
 Execution Time:0.077280044555664

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00089597702026367

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00086283683776855

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076007843017578

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.01797080039978

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.013751029968262

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00072503089904785

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0014021396636963

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0097551345825195

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0011298656463623

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.000946044921875

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080704689025879

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00061297416687012

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010859966278076

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00047397613525391

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00053191184997559

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012550354003906

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0012807846069336

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0009758472442627

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0012168884277344

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055503845214844

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00057888031005859

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.001366138458252

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0015060901641846

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.40886521339417

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00084400177001953

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007939338684082

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00067400932312012

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0011210441589355

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00051188468933105

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00053000450134277

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.001215934753418

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0014090538024902

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010190010070801

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00090789794921875

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009160041809082

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00094985961914062

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010581016540527

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00082993507385254

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00060009956359863

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.039084911346436

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059008598327637

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00054502487182617

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012850761413574

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013470649719238

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010628700256348

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00084710121154785

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00086379051208496

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00065803527832031

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.001154899597168

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057005882263184

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00058412551879883

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012431144714355

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.001392126083374

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010790824890137

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001086950302124

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010168552398682

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010800361633301

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0011460781097412

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054287910461426

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00054717063903809

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012190341949463

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013489723205566

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0011460781097412

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0011739730834961

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057077407836914

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0005800724029541

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012500286102295

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013241767883301

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010759830474854

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010030269622803

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009150505065918

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00092792510986328

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0014338493347168

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010550022125244

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00099611282348633

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0012619495391846

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054001808166504

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00056004524230957

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012280941009521

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.001378059387207

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010778903961182

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0012028217315674

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00048112869262695

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00063920021057129

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012660026550293

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.001392126083374

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0014050006866455

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0008540153503418

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076508522033691

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00061893463134766

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012290477752686

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00099492073059082

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010149478912354

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0013079643249512

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055289268493652

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00055503845214844

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012161731719971

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013279914855957

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0011029243469238

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.001284122467041

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053691864013672

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00063204765319824

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012948513031006

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013768672943115

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010058879852295

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00083494186401367

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00072097778320312

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.000579833984375

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011320114135742

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084090232849121

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00066614151000977

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0012750625610352

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057196617126465

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00056004524230957

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0013060569763184

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013010501861572

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010218620300293

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011279582977295

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009009838104248

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00075411796569824

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.001107931137085

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00052309036254883

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00053095817565918

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012359619140625

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013439655303955

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
			    WHERE tb_secretaria.secretariaid=21 
 Execution Time:0.0010600090026855

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00085806846618652

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00074911117553711

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00059890747070312

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00091886520385742

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076985359191895

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00062680244445801

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00081300735473633

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00088214874267578

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00070786476135254

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00073409080505371

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0009310245513916

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00076794624328613

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00058412551879883

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001072883605957

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00078511238098145

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00056099891662598

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00096607208251953

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007631778717041

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00058102607727051

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010800361633301

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00088000297546387

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010030269622803

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010340213775635

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00074195861816406

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00053310394287109

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
 Execution Time:0.001194953918457

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053191184997559

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00054407119750977

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0013251304626465

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013890266418457

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
 Execution Time:0.0010440349578857

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00095915794372559

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00074005126953125

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00056910514831543

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057101249694824

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00079607963562012

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345679' 
 Execution Time:0.00087213516235352

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345677' 
 Execution Time:0.00085783004760742

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012860298156738

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095105171203613

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00066995620727539

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
 Execution Time:0.0011608600616455

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053906440734863

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00053906440734863

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012218952178955

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0014219284057617

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
 Execution Time:0.0011029243469238

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010747909545898

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00069403648376465

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00049304962158203

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011789798736572

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00088691711425781

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00073003768920898

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
 Execution Time:0.0012080669403076

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053906440734863

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00056600570678711

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.001244068145752

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0014450550079346

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
 Execution Time:0.0010559558868408

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010361671447754

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007939338684082

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00071191787719727

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
 Execution Time:0.0011599063873291

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054097175598145

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00056195259094238

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012710094451904

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013442039489746

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
 Execution Time:0.0010950565338135

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010299682617188

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00079607963562012

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00054717063903809

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0014791488647461

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0012209415435791

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084018707275391

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
 Execution Time:0.0012340545654297

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00058412551879883

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00056600570678711

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012500286102295

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013570785522461

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
 Execution Time:0.0011379718780518

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011579990386963

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076603889465332

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00074291229248047

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
 Execution Time:0.001215934753418

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00062823295593262

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00058603286743164

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012369155883789

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013599395751953

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
 Execution Time:0.0010781288146973

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010612010955811

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00078511238098145

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00073003768920898

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
 Execution Time:0.0011370182037354

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00051999092102051

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00055789947509766

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012190341949463

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013580322265625

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
 Execution Time:0.0010240077972412

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010359287261963

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00083494186401367

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0006859302520752

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00088787078857422

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00075793266296387

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00056695938110352

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00092220306396484

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0019989013671875

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.013519048690796

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%k%' 
 Execution Time:0.00075602531433105

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%e%' 
 Execution Time:0.00075411796569824

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
WHERE `especialidad` =  'Traumatologia' 
 Execution Time:0.00094199180603027

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00091099739074707

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.00154709815979

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0014820098876953

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00083088874816895

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00064802169799805

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010581016540527

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00086283683776855

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00076007843017578

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00091981887817383

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0014750957489014

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%t%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0013070106506348

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%tr%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010581016540527

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE `tb_cita`.`especialidad` =  'Traumatologia' 
 Execution Time:0.0012941360473633

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traumatologi%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010619163513184

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traumatolog%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0012781620025635

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traumatol%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.001147985458374

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traumatolo%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0011970996856689

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traumato%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0011439323425293

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traumat%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0011839866638184

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Trauma%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0011661052703857

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Trau%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.001194953918457

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Tra%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.00096702575683594

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Traum%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010271072387695

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%Tr%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.00095510482788086

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%T%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010879039764404

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0009000301361084

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0017421245574951

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0010991096496582

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012960433959961

UPDATE `tb_cita` SET `fecha` = DATE_ADD(fecha,INTERVAL 1 DAY), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '16' 
 Execution Time:0.060055017471313

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012609958648682

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012168884277344

UPDATE `tb_cita` SET `fecha` = DATE_ADD(fecha,INTERVAL 4 DAY), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '15' 
 Execution Time:0.29622006416321

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012378692626953

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012109279632568

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00091886520385742

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0017580986022949

UPDATE `tb_cita` SET `fecha` = DATE_ADD(fecha,INTERVAL -2 DAY), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '16' 
 Execution Time:0.04688286781311

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0009300708770752

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0011899471282959

UPDATE `tb_cita` SET `fecha` = DATE_ADD(fecha,INTERVAL -3 DAY), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '15' 
 Execution Time:0.052842140197754

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00089287757873535

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0018730163574219

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00098395347595215

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00078701972961426

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00057697296142578

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011489391326904

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081205368041992

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00067806243896484

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011110305786133

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00083804130554199

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00069403648376465

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00090718269348145

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0013830661773682

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00088095664978027

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0027070045471191

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00087404251098633

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00075888633728027

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0006110668182373

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00099515914916992

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00090813636779785

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00078797340393066

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00099086761474609

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00071597099304199

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00051999092102051

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00094890594482422

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00089597702026367

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00063896179199219

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011711120605469

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00069284439086914

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00052404403686523

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0008389949798584

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.00154709815979

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00084519386291504

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00074505805969238

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00062394142150879

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010960102081299

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00092101097106934

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00071597099304199

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00086498260498047

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00082588195800781

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00069689750671387

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00097799301147461

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.000946044921875

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00081205368041992

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001162052154541

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081801414489746

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080299377441406

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00081586837768555

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0007321834564209

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00075006484985352

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010268688201904

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084185600280762

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00077009201049805

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010190010070801

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00088810920715332

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00070786476135254

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00088095664978027

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080299377441406

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00063300132751465

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00093197822570801

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0008399486541748

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.000640869140625

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010590553283691

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00076198577880859

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00052380561828613

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0010788440704346

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00094199180603027

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00091695785522461

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00070095062255859

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.001011848449707

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00098896026611328

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00092601776123047

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0010378360748291

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0010209083557129

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010521411895752

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0008540153503418

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084900856018066

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00087404251098633

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0010061264038086

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00086402893066406

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00069093704223633

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.011779069900513

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00094389915466309

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00057196617126465

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00072693824768066

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00081896781921387

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0006558895111084

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053000450134277

SELECT `rayosxid`, `nombre`, `tipo`
FROM (`tb_rayosx`)
WHERE `nombre` =  'inicio-sesion'
AND `tipo` =  '.png'
AND `historiaclinicaid` =  '21' 
 Execution Time:0.016767978668213

INSERT INTO `tb_rayosx` (`nombre`, `fecha`, `tipo`, `historiaclinicaid`) VALUES ('inicio-sesion', '2014-06-29', '.png', '21') 
 Execution Time:0.084467172622681

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.061043977737427

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00082802772521973

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00093793869018555

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '28' 
 Execution Time:0.00074100494384766

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '28'
AND `estado` =  'A' 
 Execution Time:0.00066590309143066

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '28'
AND `estado` =  'A' 
 Execution Time:0.00056004524230957

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '28' 
 Execution Time:0.00058197975158691

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '23' 
 Execution Time:0.0010559558868408

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00095295906066895

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00068998336791992

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00061702728271484

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0007479190826416

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00058507919311523

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00072789192199707

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00069093704223633

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.000579833984375

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00049805641174316

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00078392028808594

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00066709518432617

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0005650520324707

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00055503845214844

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00089383125305176

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00091409683227539

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0010249614715576

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00088405609130859

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00088906288146973

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00081014633178711

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00068497657775879

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001190185546875

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0008399486541748

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00061607360839844

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00074005126953125

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00052213668823242

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073695182800293

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00081515312194824

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073003768920898

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00081205368041992

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00052690505981445

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00080585479736328

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074911117553711

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00083208084106445

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00081706047058105

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00081801414489746

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063896179199219

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0008399486541748

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00098609924316406

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00088000297546387

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00062799453735352

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010230541229248

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0007328987121582

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00076007843017578

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00095701217651367

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073885917663574

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00094699859619141

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00081801414489746

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00075888633728027

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072693824768066

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345676' 
 Execution Time:0.00072002410888672

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345679' 
 Execution Time:0.00077414512634277

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345679' 
 Execution Time:0.00099682807922363

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345670' 
 Execution Time:0.00073003768920898

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345670' 
 Execution Time:0.00092983245849609

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012130737304688

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00082802772521973

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00056600570678711

call sp_lista_medico(19) 
 Execution Time:0.15075278282166

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00058197975158691

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00061297416687012

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012609958648682

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013577938079834

call sp_lista_medico(19) 
 Execution Time:0.00096297264099121

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010490417480469

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00073385238647461

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00069308280944824

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010650157928467

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00089502334594727

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007178783416748

call sp_lista_secretaria(20) 
 Execution Time:0.072994947433472

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059390068054199

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00053095817565918

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012111663818359

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013110637664795

call sp_lista_secretaria(20) 
 Execution Time:0.001021146774292

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.000885009765625

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081706047058105

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00086784362792969

