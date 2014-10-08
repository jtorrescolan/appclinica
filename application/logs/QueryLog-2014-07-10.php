SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.032296895980835

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.049968957901001

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00059890747070312

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.044074773788452

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00085306167602539

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00076484680175781

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00073790550231934

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00074505805969238

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00064611434936523

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.0008091926574707

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00081419944763184

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345678' 
 Execution Time:0.00072097778320312

SELECT *
FROM (`tb_persona`)
WHERE `dni` =  '12345673' 
 Execution Time:0.00064301490783691

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.042363166809082

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.10729598999023

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.031666040420532

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jo%' 
 Execution Time:0.00070095062255859

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jor%' 
 Execution Time:0.00066804885864258

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorg%' 
 Execution Time:0.00080704689025879

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge%' 
 Execution Time:0.00073719024658203

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge%' 
 Execution Time:0.00075316429138184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20A%' 
 Execution Time:0.00061678886413574

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20An%' 
 Execution Time:0.00063300132751465

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anr%' 
 Execution Time:0.00071501731872559

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anre%' 
 Execution Time:0.00070500373840332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anres%' 
 Execution Time:0.0006859302520752

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anre%' 
 Execution Time:0.00077581405639648

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anr%' 
 Execution Time:0.00066304206848145

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anrd%' 
 Execution Time:0.00073504447937012

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anr%' 
 Execution Time:0.00072193145751953

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anrd%' 
 Execution Time:0.00063586235046387

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Anr%' 
 Execution Time:0.00061178207397461

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20An%' 
 Execution Time:0.0006248950958252

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20And%' 
 Execution Time:0.0005650520324707

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andr%' 
 Execution Time:0.0005497932434082

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andre%' 
 Execution Time:0.00056004524230957

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres%' 
 Execution Time:0.0005040168762207

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres%' 
 Execution Time:0.00049400329589844

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20V%' 
 Execution Time:0.00069999694824219

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Vi%' 
 Execution Time:0.00072002410888672

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Vil%' 
 Execution Time:0.00068497657775879

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Vill%' 
 Execution Time:0.000701904296875

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Villa%' 
 Execution Time:0.00071310997009277

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Villan%' 
 Execution Time:0.00072097778320312

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Villanu%' 
 Execution Time:0.00071001052856445

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Villanue%' 
 Execution Time:0.00071191787719727

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Villanuev%' 
 Execution Time:0.00063800811767578

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%jorge\%20Andres\%20Villanueva%' 
 Execution Time:0.00064706802368164

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%orge\%20Andres\%20Villanueva%' 
 Execution Time:0.0006859302520752

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanueva%' 
 Execution Time:0.00071883201599121

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00060892105102539

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.0006101131439209

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00061702728271484

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00060582160949707

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.0006108283996582

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00060105323791504

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00054192543029785

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00055408477783203

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Andres Villanueva' 
 Execution Time:0.00065183639526367

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanueva\%C2\%BF%' 
 Execution Time:0.00070595741271973

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanueva\%C2\%BF\%C2\%BF%' 
 Execution Time:0.00071287155151367

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanueva\%C2\%BF%' 
 Execution Time:0.00072288513183594

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanueva%' 
 Execution Time:0.00078201293945312

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanuev%' 
 Execution Time:0.00069379806518555

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanue%' 
 Execution Time:0.00079798698425293

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villanu%' 
 Execution Time:0.00079202651977539

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villan%' 
 Execution Time:0.00076484680175781

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Villa%' 
 Execution Time:0.00082707405090332

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Vill%' 
 Execution Time:0.00062799453735352

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Vil%' 
 Execution Time:0.00066590309143066

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20Vi%' 
 Execution Time:0.00070810317993164

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres\%20V%' 
 Execution Time:0.00071120262145996

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres%' 
 Execution Time:0.00063991546630859

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andres%' 
 Execution Time:0.00063896179199219

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andre%' 
 Execution Time:0.00055694580078125

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20Andr%' 
 Execution Time:0.0005638599395752

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20And%' 
 Execution Time:0.00057506561279297

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20An%' 
 Execution Time:0.00051498413085938

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge\%20A%' 
 Execution Time:0.00053715705871582

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge%' 
 Execution Time:0.00051593780517578

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorge%' 
 Execution Time:0.00052618980407715

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jorg%' 
 Execution Time:0.00050902366638184

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jor%' 
 Execution Time:0.00048589706420898

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%Jo%' 
 Execution Time:0.00049686431884766

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%J%' 
 Execution Time:0.00049114227294922

SELECT `pacienteid`, `nomcompleto`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
AND  `nomcompleto`  LIKE '%j%' 
 Execution Time:0.00073003768920898

SELECT `nomcompleto`
FROM (`tb_paciente`)
WHERE `nomcompleto` =  'Jorge Manuel Bravo Uchuya' 
 Execution Time:0.00063776969909668

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
WHERE `especialidad` =  'Traumatologia' 
 Execution Time:0.0010221004486084

