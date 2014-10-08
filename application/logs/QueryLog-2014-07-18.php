SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.01129412651062

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0010089874267578

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.011420965194702

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.0085840225219727

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ja%' 
 Execution Time:0.00073599815368652

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jav%' 
 Execution Time:0.00069594383239746

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javi%' 
 Execution Time:0.00064897537231445

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javie%' 
 Execution Time:0.00068807601928711

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier%' 
 Execution Time:0.00071597099304199

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier%' 
 Execution Time:0.00069785118103027

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20H%' 
 Execution Time:0.00071907043457031

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Hu%' 
 Execution Time:0.00070595741271973

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Hua%' 
 Execution Time:0.00072002410888672

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huam%' 
 Execution Time:0.00072002410888672

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama%' 
 Execution Time:0.00072002410888672

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama%' 
 Execution Time:0.00072717666625977

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Q%' 
 Execution Time:0.00072813034057617

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Qi%' 
 Execution Time:0.00070381164550781

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Q%' 
 Execution Time:0.00070595741271973

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Qu%' 
 Execution Time:0.0007171630859375

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Qui%' 
 Execution Time:0.00083684921264648

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Quis%' 
 Execution Time:0.00075411796569824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Quisp%' 
 Execution Time:0.00072097778320312

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Javier\%20Huama\%20Quispe%' 
 Execution Time:0.00066280364990234

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Javier Huama Quispe' 
 Execution Time:0.00072598457336426

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Javier Huama Quispe' 
 Execution Time:0.00071406364440918

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Javier Huama Quispe' 
 Execution Time:0.00073814392089844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00090599060058594

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Manuel Bravo Uchuya' 
 Execution Time:0.00070714950561523

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%j%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0012907981872559

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jo%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010421276092529

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jor%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.001011848449707

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jore%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010161399841309

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jor%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010499954223633

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jorf%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010240077972412

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jorfe%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010528564453125

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jorf%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010240077972412

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jor%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010321140289307

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jorg%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0013079643249512

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jorge%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.00099396705627441

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE `tb_cita`.`especialidad` =  'jorge' 
 Execution Time:0.0011649131774902

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE `tb_cita`.`especialidad` =  'jorge' 
 Execution Time:0.0011858940124512

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE `tb_cita`.`especialidad` =  'jorge' 
 Execution Time:0.0011570453643799

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE `tb_cita`.`especialidad` =  'jorge' 
 Execution Time:0.0011398792266846

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jorg%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010130405426025

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jor%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010101795196533

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%jo%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010149478912354

SELECT `tb_cita`.`especialidad` as query
FROM (`tb_cita`)
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid`
WHERE  `tb_cita`.`especialidad`  LIKE '%j%'
GROUP BY `tb_cita`.`especialidad` 
 Execution Time:0.0010240077972412

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0009009838104248

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0015361309051514

