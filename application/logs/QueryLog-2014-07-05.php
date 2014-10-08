SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.038015127182007

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.031018972396851

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063014030456543

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.01431679725647

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00096011161804199

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0014381408691406

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0011639595031738

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00080704689025879

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074291229248047

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072503089904785

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072503089904785

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0011799335479736

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0011210441589355

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00078678131103516

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0012798309326172

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00074291229248047

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00071406364440918

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00091409683227539

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0007319450378418

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00098896026611328

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345672' 
 Execution Time:0.0010430812835693

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00073003768920898

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059700012207031

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00090813636779785

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.027980089187622

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.049272060394287

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.0010488033294678

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0014359951019287

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00087499618530273

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0014231204986572

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00080418586730957

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00069189071655273

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00060009956359863

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00080680847167969

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00078392028808594

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00075507164001465

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00070500373840332

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010139942169189

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00089788436889648

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00082087516784668

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073099136352539

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072789192199707

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0013470649719238

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00070595741271973

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0009770393371582

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345679' 
 Execution Time:0.00091409683227539

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0008690357208252

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00067496299743652

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00096702575683594

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00076794624328613

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00081586837768555

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00056099891662598

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00087809562683105

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.001345157623291

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00075793266296387

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00058197975158691

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010190010070801

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00082921981811523

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00087118148803711

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074410438537598

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010430812835693

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074505805969238

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00071501731872559

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072503089904785

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0011868476867676

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00077199935913086

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00099396705627441

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0012798309326172

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00080513954162598

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010440349578857

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00075197219848633

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00094485282897949

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00086522102355957

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00076198577880859

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00084304809570312

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00086212158203125

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00087690353393555

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073790550231934

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00076913833618164

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00078010559082031

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00088405609130859

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00096702575683594

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00083303451538086

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0010159015655518

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00077390670776367

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0012729167938232

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0012919902801514

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00078082084655762

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072884559631348

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00081682205200195

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00089788436889648

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00096416473388672

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00096297264099121

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074219703674316

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00092911720275879

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0019021034240723

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00075602531433105

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00069713592529297

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00076913833618164

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00068998336791992

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jo%' 
 Execution Time:0.00075602531433105

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jor%' 
 Execution Time:0.00073814392089844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jore%' 
 Execution Time:0.00072002410888672

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jor%' 
 Execution Time:0.00071597099304199

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jo%' 
 Execution Time:0.00069999694824219

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00072312355041504

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.0007178783416748

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00071597099304199

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.0007021427154541

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.0006871223449707

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00073599815368652

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00067901611328125

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.0007481575012207

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00079488754272461

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00069308280944824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00072908401489258

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00070095062255859

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00074195861816406

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00065302848815918

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00073504447937012

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00069403648376465

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.00072908401489258

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Vargas%' 
 Execution Time:0.00068187713623047

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00068902969360352

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00072312355041504

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00062990188598633

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00068116188049316

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00079011917114258

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00083017349243164

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00075697898864746

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.0007021427154541

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Juan Manuel Vargas' 
 Execution Time:0.00062799453735352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varga%' 
 Execution Time:0.000701904296875

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Varg%' 
 Execution Time:0.00082993507385254

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Var%' 
 Execution Time:0.00099802017211914

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20Va%' 
 Execution Time:0.00081515312194824

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel%' 
 Execution Time:0.00087213516235352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manuel\%20V%' 
 Execution Time:0.00082302093505859

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Man%' 
 Execution Time:0.0008540153503418

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manue%' 
 Execution Time:0.00075602531433105

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Manu%' 
 Execution Time:0.00080418586730957

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20Ma%' 
 Execution Time:0.00090193748474121

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan\%20M%' 
 Execution Time:0.00093197822570801

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Juan%' 
 Execution Time:0.00071406364440918

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jua%' 
 Execution Time:0.00064706802368164

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Ju%' 
 Execution Time:0.00071310997009277

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00070595741271973

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Manuel Bravo Uchuya' 
 Execution Time:0.00063490867614746

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00067305564880371

