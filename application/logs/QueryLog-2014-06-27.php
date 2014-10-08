SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00069785118103027

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00076484680175781

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00056719779968262

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00073409080505371

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055909156799316

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00098395347595215

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0014510154724121

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0012640953063965

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00086283683776855

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00074100494384766

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00066900253295898

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.0007939338684082

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00070095062255859

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00064587593078613

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00082993507385254

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00087714195251465

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00071096420288086

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00089693069458008

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00073695182800293

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00142502784729

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00092315673828125

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00092911720275879

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00074005126953125

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0013070106506348

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00077295303344727

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00077581405639648

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011489391326904

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00085902214050293

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00078487396240234

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010781288146973

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084280967712402

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00078082084655762

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0005950927734375

SELECT *
FROM (`tb_provincia`)
WHERE `departamentoid` =  '15' 
 Execution Time:0.00089097023010254

SELECT *
FROM (`tb_distrito`)
WHERE `provinciaid` =  '129' 
 Execution Time:0.00087499618530273

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010490417480469

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.014297962188721

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00072884559631348

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
			    WHERE tb_secretaria.secretariaid=19 
 Execution Time:0.0011038780212402

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053596496582031

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00052595138549805

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012750625610352

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0014560222625732

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
			    WHERE tb_secretaria.secretariaid=19 
 Execution Time:0.0012919902801514

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00083684921264648

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095200538635254

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084900856018066

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00097298622131348

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010421276092529

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00090694427490234

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0009000301361084

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00089001655578613

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00059390068054199

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012321472167969

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081515312194824

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007469654083252

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010941028594971

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010690689086914

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010800361633301

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010690689086914

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0011270046234131

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010750293731689

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010349750518799

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084114074707031

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010042190551758

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084090232849121

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095009803771973

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0011169910430908

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010039806365967

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076889991760254

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010359287261963

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0011038780212402

SELECT `secretariaid`, `tb_secretaria`.`personaid` AS personaid, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095701217651367

SELECT `secretariaid`, `tb_secretaria`.`personaid` AS personaid, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010499954223633

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0011248588562012

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0016648769378662

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010788440704346

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080108642578125

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001276969909668

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095987319946289

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0006709098815918

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00089597702026367

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00099492073059082

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00093603134155273

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0006411075592041

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001140832901001

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095105171203613

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081801414489746

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010209083557129

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00099396705627441

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007481575012207

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00082921981811523

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084590911865234

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00062894821166992

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010359287261963

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00098705291748047

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009160041809082

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0015771389007568

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00097513198852539

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00086712837219238

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00095391273498535

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010488033294678

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00090479850769043

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011591911315918

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00099492073059082

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00088095664978027

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010941028594971

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010240077972412

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00083613395690918

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010731220245361

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00079607963562012

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00084686279296875

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011188983917236

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0010199546813965

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00073409080505371

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0013020038604736

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00087499618530273

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00078392028808594

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001431941986084

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00088000297546387

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00089287757873535

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.002011775970459

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0015451908111572

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081682205200195

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012109279632568

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00086402893066406

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00064206123352051

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0015900135040283

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00098514556884766

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00072193145751953

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00067496299743652

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00046086311340332

SELECT *
FROM (`tb_provincia`)
WHERE `departamentoid` =  '15' 
 Execution Time:0.00097298622131348

SELECT *
FROM (`tb_distrito`)
WHERE `provinciaid` =  '128' 
 Execution Time:0.001060962677002

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00081396102905273

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00090789794921875

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00066280364990234

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00073003768920898

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00053310394287109

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00086307525634766

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00056886672973633

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00085902214050293

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00058698654174805

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00094890594482422

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00063490867614746

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00099515914916992

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00072193145751953

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0007939338684082

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00075387954711914

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00083303451538086

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00058603286743164

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0010101795196533

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00061702728271484

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0010559558868408

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00068092346191406

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00082302093505859

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00062203407287598

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0009310245513916

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0007469654083252

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00077295303344727

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057506561279297

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00075984001159668

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00060701370239258

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00087809562683105

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00057792663574219

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00080513954162598

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0011579990386963

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00077986717224121

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00056004524230957

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00087404251098633

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.0007779598236084

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '26' 
 Execution Time:0.00056600570678711

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '21' 
 Execution Time:0.00099587440490723

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.0008080005645752

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '27'
AND `estado` =  'A' 
 Execution Time:0.00063514709472656

SELECT *
FROM (`tb_historiaclinica`)
WHERE `pacienteid` =  '27' 
 Execution Time:0.00056195259094238

SELECT *
FROM (`tb_diagnostico`)
WHERE `historiaclinicaid` =  '22' 
 Execution Time:0.00071310997009277

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00074505805969238

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00054693222045898

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00073099136352539

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055408477783203

