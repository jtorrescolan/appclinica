SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010828971862793

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00067591667175293

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00051593780517578

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00068497657775879

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010190010070801

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00076198577880859

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00060701370239258

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0008399486541748

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00064516067504883

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0006251335144043

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00075197219848633

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00068211555480957

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00073099136352539

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00066590309143066

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00059413909912109

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054311752319336

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0010168552398682

SELECT `informeid`, `nombre`, `tipo`
FROM (`tb_informe`)
WHERE `nombre` =  'diagrama_de_flujo'
AND `tipo` =  '.docx'
AND `historiaclinicaid` =  '21' 
 Execution Time:0.00083398818969727

INSERT INTO `tb_informe` (`nombre`, `fecha`, `tipo`, `historiaclinicaid`) VALUES ('diagrama_de_flujo', '2014-06-25', '.docx', '21') 
 Execution Time:0.034426927566528

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00074505805969238

SELECT `ecografiaid`, `nombre`, `tipo`
FROM (`tb_ecografia`)
WHERE `nombre` =  'inicio-sesion'
AND `tipo` =  '.png'
AND `historiaclinicaid` =  '21' 
 Execution Time:0.00077605247497559

INSERT INTO `tb_ecografia` (`nombre`, `fecha`, `tipo`, `historiaclinicaid`) VALUES ('inicio-sesion', '2014-06-25', '.png', '21') 
 Execution Time:0.052181005477905

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00089788436889648

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00062084197998047

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0004429817199707

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00075602531433105

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00056195259094238

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00093913078308105

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0011458396911621

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%l%' 
 Execution Time:0.00075006484985352

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
WHERE `especialidad` =  'Traumatologia' 
 Execution Time:0.00096392631530762

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00089406967163086

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0016391277313232

UPDATE `tb_cita` SET `fecha` = fecha+(1), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '15' 
 Execution Time:0.056159019470215

UPDATE `tb_cita` SET `fecha` = fecha+(1), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '13' 
 Execution Time:0.037255048751831

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00089311599731445

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0016999244689941

UPDATE `tb_cita` SET `fecha` = fecha+(7), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '14' 
 Execution Time:0.041493892669678

UPDATE `tb_cita` SET `fecha` = fecha+(4), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '15' 
 Execution Time:0.071348190307617

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0008690357208252

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0016500949859619

SELECT *
FROM (`tb_persona`) 
 Execution Time:0.00070595741271973

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00081181526184082

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012650489807129

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007472038269043

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00069403648376465

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
 Execution Time:0.001384973526001

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055098533630371

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00056600570678711

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0016570091247559

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0015490055084229

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
 Execution Time:0.0010881423950195

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00098919868469238

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0008399486541748

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00071907043457031

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00087499618530273

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0007481575012207

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00055313110351562

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010180473327637

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00084209442138672

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00079798698425293

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00075197219848633

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00069618225097656

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00061607360839844

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010278224945068

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00095319747924805

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00067305564880371

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00093293190002441

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0013420581817627

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012171268463135

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012259483337402

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00082492828369141

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012450218200684

UPDATE `tb_cita` SET `fecha` = fecha+(25), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '14' 
 Execution Time:0.062150001525879

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00087594985961914

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0011839866638184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%l%' 
 Execution Time:0.023052930831909

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
WHERE `especialidad` =  'Traumatologia' 
 Execution Time:0.0010261535644531

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00086688995361328

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012710094451904

UPDATE `tb_cita` SET `fecha` = fecha+(1), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '15' 
 Execution Time:0.048314094543457

UPDATE `tb_cita` SET `fecha` = fecha+(1), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '16' 
 Execution Time:0.055155992507935

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00087118148803711

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0015828609466553

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00089287757873535

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0017280578613281

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.002007007598877

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012960433959961

UPDATE `tb_cita` SET `fecha` = fecha+(1), `horainicio` = SEC_TO_TIME(time_to_sec(horainicio)+0), `horafin` = SEC_TO_TIME(time_to_sec(horafin)+0) WHERE `citaid` =  '14' 
 Execution Time:0.066055059432983

UPDATE `tb_cita` SET `horafin` = SEC_TO_TIME(time_to_sec(horafin)+3000) WHERE `citaid` =  '16' 
 Execution Time:0.061968088150024

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00093507766723633

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0017180442810059

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0013370513916016

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012900829315186

