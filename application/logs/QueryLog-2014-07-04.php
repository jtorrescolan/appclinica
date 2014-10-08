SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00060200691223145

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00042486190795898

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0057291984558105

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00054216384887695

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00086498260498047

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00077486038208008

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00081920623779297

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00039291381835938

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00034904479980469

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00089192390441895

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0018000602722168

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00079989433288574

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012898445129395

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00061297416687012

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0010919570922852

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan' 
 Execution Time:0.00061821937561035

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0011451244354248

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0013539791107178

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan' 
 Execution Time:0.00087308883666992

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan 20Manuel 20Bravo' 
 Execution Time:0.00085997581481934

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00057888031005859

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00044012069702148

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00039100646972656

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00037384033203125

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00039291381835938

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00038909912109375

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00043106079101562

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Bravo' 
 Execution Time:0.00064206123352051

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00081992149353027

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0013720989227295

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'J' 
 Execution Time:0.00060510635375977

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'j' 
 Execution Time:0.00059700012207031

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'j' 
 Execution Time:0.00064706802368164

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'je' 
 Execution Time:0.00063395500183105

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'j' 
 Execution Time:0.00060296058654785

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00091004371643066

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012328624725342

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00073099136352539

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00071001052856445

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%JU%' 
 Execution Time:0.00070905685424805

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%JUA%' 
 Execution Time:0.00069308280944824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%JU%' 
 Execution Time:0.00070595741271973

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00071382522583008

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00069904327392578

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00057101249694824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00063610076904297

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00063300132751465

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00073003768920898

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00071597099304199

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00086808204650879

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00070691108703613

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00070309638977051

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00070405006408691

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.0006260871887207

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00068902969360352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00061702728271484

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00064396858215332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00069212913513184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00063800811767578

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.0005500316619873

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00072789192199707

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00061297416687012

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
WHERE `especialidad` =  'Traumatologia' 
 Execution Time:0.0010449886322021

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00064682960510254

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.001183032989502

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00072288513183594

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00070500373840332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00079107284545898

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.0007481575012207

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juana%' 
 Execution Time:0.00069808959960938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juana%' 
 Execution Time:0.00073790550231934

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juana%' 
 Execution Time:0.00065803527832031

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00075387954711914

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00069594383239746

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00055789947509766

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00055599212646484

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00049591064453125

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00054001808166504

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.0005040168762207

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00051689147949219

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel' 
 Execution Time:0.00067400932312012

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00081491470336914

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00070786476135254

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00072407722473145

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00076413154602051

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00072193145751953

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.000701904296875

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.00069189071655273

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00063395500183105

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00082206726074219

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0010089874267578

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0014901161193848

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00057005882263184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00071191787719727

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00069499015808105

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00064492225646973

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00087094306945801

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00074386596679688

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00071597099304199

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00077199935913086

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00064396858215332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00060510635375977

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00068879127502441

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00069808959960938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00071883201599121

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00070810317993164

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00076603889465332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00063300132751465

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00067996978759766

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.00070500373840332

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00072908401489258

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00045108795166016

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.001291036605835

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0010950565338135

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00075793266296387

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00067400932312012

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jue%' 
 Execution Time:0.00070881843566895

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juea%' 
 Execution Time:0.00069403648376465

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juean%' 
 Execution Time:0.0007178783416748

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juea%' 
 Execution Time:0.00070905685424805

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jue%' 
 Execution Time:0.000701904296875

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00068402290344238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00069117546081543

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.0007469654083252

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00064301490783691

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.0007319450378418

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00063204765319824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00057792663574219

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00067496299743652

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00056290626525879

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00057005882263184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00054192543029785

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00076603889465332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00071501731872559

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.0007469654083252

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vara%' 
 Execution Time:0.00071310997009277

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varag%' 
 Execution Time:0.00073695182800293

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vara%' 
 Execution Time:0.00071501731872559

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00077390670776367

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00084185600280762

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00073814392089844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.0011940002441406

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00068283081054688

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00060892105102539

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00065803527832031

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00072097778320312

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00073099136352539

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.0007789134979248

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00078296661376953

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.0015349388122559

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.0007789134979248

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00094699859619141

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00078201293945312

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00084996223449707

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00068783760070801

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.0007479190826416

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00070691108703613

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00064396858215332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00061798095703125

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00062298774719238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00056099891662598

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'J' 
 Execution Time:0.00066399574279785

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00083398818969727

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0013949871063232

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00073599815368652

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.0006859302520752

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00063705444335938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00071406364440918

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00069999694824219

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00072598457336426

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.0006871223449707

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00068807601928711

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00061583518981934

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00061202049255371

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00062203407287598

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00064802169799805

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00063514709472656

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00071907043457031

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00071001052856445

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00063800811767578

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00070905685424805

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.00066804885864258

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00080299377441406

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00064992904663086

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00066804885864258

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00073385238647461

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00069594383239746

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00072908401489258

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.0007178783416748

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00069403648376465

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00069785118103027

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.0006859302520752

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00060606002807617

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00062417984008789

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00063109397888184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.0006110668182373

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00054502487182617

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00055313110351562

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00050997734069824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00049710273742676

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00052189826965332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00047588348388672

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00062298774719238

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.00076699256896973

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00073003768920898

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00072598457336426

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00070476531982422

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00073480606079102

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.0006721019744873

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00068402290344238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20MA%' 
 Execution Time:0.00073909759521484

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20MAn%' 
 Execution Time:0.00067782402038574

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20MAnu%' 
 Execution Time:0.00069880485534668

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20MAn%' 
 Execution Time:0.00068092346191406

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20MA%' 
 Execution Time:0.00068807601928711

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00072503089904785

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00070881843566895

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.00067901611328125

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00061392784118652

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00062203407287598

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00062298774719238

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00054001808166504

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00051403045654297

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00051307678222656

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00050997734069824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vara%' 
 Execution Time:0.00045609474182129

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00070405006408691

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00072097778320312

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00069713592529297

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.00070691108703613

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00065398216247559

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00060701370239258

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00071215629577637

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00071501731872559

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00061392784118652

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00063085556030273

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00069808959960938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.0007171630859375

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00070309638977051

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00069618225097656

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00068497657775879

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00067400932312012

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00069999694824219

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00068998336791992

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00062894821166992

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.000640869140625

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.0006258487701416

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00065302848815918

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00056099891662598

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00057601928710938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00054407119750977

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00048089027404785

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00054001808166504

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00076198577880859

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Manuel Bravo Uchuya' 
 Execution Time:0.0006098747253418

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00081491470336914

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0012331008911133

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00074410438537598

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057291984558105

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00081300735473633

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0007469654083252

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00084495544433594

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0009000301361084

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0009160041809082

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00092601776123047

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00048518180847168

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00037908554077148

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074887275695801

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00094699859619141

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00092005729675293

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00069808959960938

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055694580078125

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074410438537598

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00076198577880859

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00069785118103027

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00086593627929688

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00067687034606934

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00057411193847656

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.054766893386841

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00058412551879883

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00039482116699219

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.0004730224609375

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00047111511230469

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00037503242492676

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00043988227844238

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00047802925109863

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00063300132751465

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00043106079101562

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0003819465637207

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00049805641174316

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00039196014404297

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00055193901062012

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00051212310791016

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00039386749267578

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0003662109375

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00070786476135254

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00043988227844238

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.038254022598267

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00066709518432617

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00054311752319336

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00049495697021484

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00044989585876465

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00040793418884277

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00035810470581055

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00080180168151855

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00054311752319336

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00041294097900391

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00034785270690918

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00048017501831055

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00035715103149414

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00044989585876465

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.0005190372467041

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0003659725189209

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0003509521484375

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00059986114501953

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0011241436004639

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065398216247559

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00096297264099121

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00065708160400391

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0005497932434082

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0012311935424805

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00057888031005859

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00046586990356445

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00060892105102539

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00058484077453613

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00045609474182129

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00043511390686035

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00062298774719238

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00051021575927734

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.31621193885803

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00052905082702637

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00030899047851562

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.0003821849822998

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00034999847412109

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00030517578125

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00028800964355469

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00067901611328125

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00047612190246582

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00043320655822754

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.049901008605957

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00057291984558105

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00054717063903809

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00051498413085938

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00044703483581543

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00040292739868164

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00092005729675293

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00062894821166992

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0005028247833252

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00065398216247559

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0004880428314209

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00063800811767578

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00058102607727051

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00054311752319336

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0004730224609375

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00079107284545898

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00050497055053711

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.026252031326294

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00074386596679688

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00046396255493164

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00054192543029785

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00051307678222656

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00044703483581543

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0004429817199707

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00058794021606445

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00047087669372559

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00037193298339844

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00048208236694336

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00040197372436523

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00045299530029297

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00041317939758301

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00036096572875977

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00032687187194824

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0010290145874023

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00075602531433105

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00057005882263184

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00076818466186523

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00063896179199219

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00073504447937012

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00081014633178711

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00061297416687012

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00050210952758789

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0011129379272461

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00076699256896973

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00060796737670898

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00072813034057617

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0005640983581543

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00071597099304199

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00065398216247559

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00068807601928711

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00069713592529297

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00098109245300293

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0010271072387695

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00088906288146973

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0009758472442627

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00083303451538086

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.001014232635498

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.0010678768157959

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0010061264038086

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053095817565918

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00084304809570312

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00084090232849121

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00066494941711426

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0006101131439209

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00082302093505859

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00064396858215332

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00073695182800293

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00065398216247559

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00058102607727051

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063180923461914

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00089693069458008

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00051689147949219

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0003960132598877

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00034308433532715

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00043702125549316

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00036191940307617

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00051307678222656

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00042605400085449

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00034904479980469

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00030612945556641

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00088214874267578

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00065898895263672

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00089788436889648

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00064802169799805

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00050687789916992

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00042200088500977

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00090980529785156

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00077486038208008

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00057601928710938

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00044608116149902

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00067615509033203

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00068306922912598

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00064396858215332

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00058388710021973

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00057792663574219

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00046896934509277

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00066304206848145

