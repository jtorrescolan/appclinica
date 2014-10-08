SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00093388557434082

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.022305965423584

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00077414512634277

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.034357070922852

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00094079971313477

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0005958080291748

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00078296661376953

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00065279006958008

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0006108283996582

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00061392784118652

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0010058879852295

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00064396858215332

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00062298774719238

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00083804130554199

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00059294700622559

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00072908401489258

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.0006871223449707

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00058603286743164

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059604644775391

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0074570178985596

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.0011730194091797

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00086498260498047

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00064992904663086

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00060486793518066

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00073885917663574

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00057816505432129

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.00070810317993164

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00070714950561523

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00058412551879883

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00062990188598633

SELECT *
FROM (`tb_usuario`)
WHERE `usuario` =  0 
 Execution Time:0.014374971389771

SELECT *
FROM (`tb_usuario`)
WHERE `usuario` =  0 
 Execution Time:0.00075912475585938

SELECT *
FROM (`tb_usuario`)
WHERE `usuario` =  0 
 Execution Time:0.11385178565979

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.1066689491272

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.035428047180176

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.085388898849487

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.12855315208435

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.049275875091553

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00061488151550293

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '22' 
 Execution Time:0.075209856033325

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '22' 
 Execution Time:0.046222925186157

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.00066995620727539

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.050233840942383

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.0011320114135742

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00069689750671387

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00059413909912109

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00068378448486328

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00056791305541992

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '22' 
 Execution Time:0.00072717666625977

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '22' 
 Execution Time:0.00067877769470215

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.00065183639526367

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00064611434936523

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.001060962677002

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00065994262695312

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00060820579528809

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00078797340393066

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00059103965759277

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '22' 
 Execution Time:0.00076198577880859

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '22' 
 Execution Time:0.00067400932312012

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.0007021427154541

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00062394142150879

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.0010628700256348

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00068283081054688

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00065898895263672

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00070691108703613

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00058698654174805

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '22' 
 Execution Time:0.00075101852416992

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '22' 
 Execution Time:0.00067591667175293

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.00060820579528809

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055384635925293

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.0010190010070801

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00069713592529297

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.0006110668182373

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00071191787719727

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00058197975158691

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '22' 
 Execution Time:0.00071501731872559

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '22' 
 Execution Time:0.00067305564880371

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.00058388710021973

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054597854614258

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.021087884902954

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.031325101852417

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00075006484985352

SELECT *
FROM (`tb_informe`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.035799980163574

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00089383125305176

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.0006251335144043

SELECT `ecografiaid`, `tb_ecografia`.`nombre`, `fecha`, `tipo`, `tb_ecografia`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_ecografia`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_ecografia`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_ecografia`.`historiaclinicaid` =  '21' 
 Execution Time:0.0097489356994629

SELECT `rayosxid`, `tb_rayosx`.`nombre`, `fecha`, `tipo`, `tb_rayosx`.`historiaclinicaid`, `tb_historiaclinica`.`pacienteid`
FROM (`tb_rayosx`)
JOIN `tb_historiaclinica` ON `tb_historiaclinica`.`historiaclinicaid`=`tb_rayosx`.`historiaclinicaid`
JOIN `tb_paciente` ON `tb_paciente`.`pacienteid`=`tb_historiaclinica`.`pacienteid`
WHERE `tb_rayosx`.`historiaclinicaid` =  '21' 
 Execution Time:0.00078701972961426

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00070285797119141

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0005650520324707

SELECT *
FROM (`tb_persona`) 
 Execution Time:0.10224008560181

SELECT *
FROM (`tb_persona`) 
 Execution Time:0.00095891952514648

