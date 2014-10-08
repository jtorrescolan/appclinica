SELECT *
FROM (`tb_persona`) 
 Execution Time:0.00052285194396973

SELECT *
FROM (`tb_usuario`) 
 Execution Time:0.00061202049255371

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00052309036254883

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00046300888061523

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00049996376037598

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00061583518981934

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.00088000297546387

SELECT `especialidad`
FROM (`tb_medico`)
GROUP BY `especialidad` 
 Execution Time:0.00073909759521484

SELECT *
FROM (`tb_cita`)
JOIN `tb_paciente` ON `tb_cita`.`pacienteid`=`tb_paciente`.`pacienteid`
JOIN `tb_medico` ON `tb_medico`.`medicoid`=`tb_cita`.`medicoid`
JOIN `tb_persona` ON `tb_persona`.`personaid`=`tb_medico`.`personaid` 
 Execution Time:0.0010790824890137

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00085592269897461

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0005500316619873

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010819435119629

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081396102905273

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00070595741271973

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
 Execution Time:0.0011417865753174

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00052499771118164

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00055408477783203

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012199878692627

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013790130615234

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
 Execution Time:0.0010578632354736

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00097918510437012

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00087690353393555

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.000762939453125

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012028217315674

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00070500373840332

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00056791305541992

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00088095664978027

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080513954162598

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00057697296142578

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00084304809570312

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00053215026855469

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00044989585876465

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00068306922912598

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00047993659973145

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00031805038452148

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00056886672973633

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00055098533630371

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00041103363037109

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010421276092529

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00076198577880859

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00065898895263672

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0011560916900635

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00082707405090332

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00057101249694824

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.001162052154541

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0007011890411377

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00058317184448242

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00070095062255859

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00088620185852051

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00077486038208008

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00059914588928223

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00082206726074219

SELECT *
FROM (`tb_paciente`)
WHERE `pacienteid` =  '26'
AND `estado` =  'A' 
 Execution Time:0.00064611434936523

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.0004730224609375

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00078296661376953

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00097298622131348

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0011119842529297

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00049591064453125

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00041913986206055

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00033688545227051

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00058579444885254

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00049281120300293

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00047898292541504

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00061798095703125

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00068783760070801

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00065088272094727

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.001194953918457

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00087094306945801

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00075387954711914

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012400150299072

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007939338684082

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00079488754272461

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010440349578857

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00095796585083008

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007479190826416

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010838508605957

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00085306167602539

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00076508522033691

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010697841644287

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.000885009765625

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0006108283996582

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00066614151000977

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00075697898864746

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00066995620727539

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0011348724365234

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009000301361084

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00082898139953613

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010828971862793

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00087904930114746

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00071191787719727

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0010459423065186

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0010168552398682

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00079202651977539

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0020830631256104

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007789134979248

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00057506561279297

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
 Execution Time:0.0093169212341309

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00060606002807617

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.00058293342590332

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0012390613555908

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0014398097991943

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
 Execution Time:0.0011270046234131

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0010108947753906

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080299377441406

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00079107284545898

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00055599212646484

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00044012069702148

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00043296813964844

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.0004730224609375

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00037503242492676

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00033092498779297

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00086307525634766

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00076580047607422

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00060009956359863

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012362003326416

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0009610652923584

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00080513954162598

SELECT `secretariaid`, `tb_secretaria`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.0012450218200684

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00072693824768066

SELECT *
FROM (`tb_secretaria`)
JOIN `tb_persona` ON `tb_secretaria`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00064516067504883

SELECT `pacienteid`, `nomcompleto`, `edad`, `domicilio`, `telefono`
FROM (`tb_paciente`)
WHERE `estado` =  'A'
ORDER BY `nomcompleto` asc
LIMIT 10 
 Execution Time:0.00088882446289062

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.0009160041809082

SELECT *
FROM (`tb_paciente`)
WHERE `estado` =  'A' 
 Execution Time:0.00066995620727539

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00069499015808105

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.00097990036010742

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00087499618530273

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.0007178783416748

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
 Execution Time:0.0011827945709229

SELECT *
FROM (`tb_estadocivil`) 
 Execution Time:0.00055193901062012

SELECT *
FROM (`tb_departamento`) 
 Execution Time:0.0006098747253418

SELECT *
FROM (`tb_provincia`) 
 Execution Time:0.0013060569763184

SELECT *
FROM (`tb_distrito`) 
 Execution Time:0.0013079643249512

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
 Execution Time:0.0010390281677246

SELECT `medicoid`, `tb_medico`.`personaid`, `dni`, `nombcompleto`, `domicilio`, `telefono`
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid`
ORDER BY `dni` asc
LIMIT 10 
 Execution Time:0.038294792175293

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00081706047058105

SELECT *
FROM (`tb_medico`)
JOIN `tb_persona` ON `tb_medico`.`personaid`=`tb_persona`.`personaid` 
 Execution Time:0.00064802169799805

