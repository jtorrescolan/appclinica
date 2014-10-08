SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00072789192199707

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00094795227050781

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00084400177001953

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00077009201049805

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00093603134155273

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00076103210449219

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.071465015411377

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0075500011444092

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0007178783416748

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.13704299926758

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.02676796913147

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0054891109466553

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063395500183105

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00095701217651367

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00085592269897461

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.000701904296875

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00087118148803711

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.015790939331055

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0007779598236084

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0007479190826416

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00071620941162109

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00084090232849121

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00074005126953125

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00058698654174805

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00072097778320312

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.015482902526855

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.012454986572266

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065708160400391

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.034515857696533

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0066039562225342

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00086283683776855

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0006260871887207

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00075817108154297

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059199333190918

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.18948888778687

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076794624328613

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00065708160400391

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00084614753723145

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00056815147399902

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00095701217651367

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345679' 
 Execution Time:0.00087380409240723

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '47351151' 
 Execution Time:0.00075292587280273

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0008089542388916

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057005882263184

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00072383880615234

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053095817565918

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00085997581481934

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00086808204650879

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073099136352539

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00079703330993652

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00056099891662598

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010149478912354

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00085806846618652

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065803527832031

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00078201293945312

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00076508522033691

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054097175598145

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00087594985961914

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0008540153503418

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00071001052856445

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00082993507385254

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00079894065856934

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00068402290344238

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.000885009765625

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00072503089904785

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055789947509766

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074100494384766

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00069999694824219

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063014030456543

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '47351151' 
 Execution Time:0.00074291229248047

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '47351151' 
 Execution Time:0.00080585479736328

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '47351152' 
 Execution Time:0.00072002410888672

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00078892707824707

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057101249694824

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00079894065856934

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345676' 
 Execution Time:0.00070714950561523

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0009000301361084

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345676' 
 Execution Time:0.00082111358642578

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00083303451538086

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00051999092102051

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00091099739074707

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00083684921264648

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065207481384277

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00095415115356445

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00093793869018555

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0007939338684082

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055503845214844

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00092887878417969

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00097107887268066

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065398216247559

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00075912475585938

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00072598457336426

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055599212646484

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00067901611328125

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00060415267944336

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00080299377441406

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '47351151' 
 Execution Time:0.0009160041809082

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '47351152' 
 Execution Time:0.00087809562683105

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065398216247559

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00089097023010254

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00086283683776855

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00069189071655273

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0008089542388916

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00067591667175293

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00057816505432129

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00055503845214844

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0007929801940918

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00089192390441895

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00075197219848633

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0006260871887207

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00068497657775879

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00098299980163574

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00089907646179199

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00072193145751953

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '28'
AND `estado` =  'A' 
 Execution Time:0.00088691711425781

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '28' 
 Execution Time:0.00065994262695312

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '23' 
 Execution Time:0.00067305564880371

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '23' 
 Execution Time:0.00067305564880371

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '28' 
 Execution Time:0.00056910514831543

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '23' 
 Execution Time:0.00071811676025391

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '23' 
 Execution Time:0.00065803527832031

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '28'
AND `estado` =  'A' 
 Execution Time:0.00058197975158691

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00061702728271484

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00088095664978027

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00061702728271484

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.017877101898193

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00086283683776855

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00056600570678711

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00092601776123047

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012869834899902

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00079703330993652

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001270055770874

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00088906288146973

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00074410438537598

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00071287155151367

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00052404403686523

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073003768920898

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00076985359191895

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057697296142578

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00092196464538574

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00066590309143066

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00098490715026855

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0007929801940918

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00098705291748047

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00087714195251465

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074505805969238

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0011510848999023

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055408477783203

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0007929801940918

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0005490779876709

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00089502334594727

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00060009956359863

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0011110305786133

