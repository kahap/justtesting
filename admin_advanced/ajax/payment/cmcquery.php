<?php
header('Content-Type: text/html; charset=utf8');
require_once('../../model/require_ajax.php');

$rc = new API("real_cases");

/*$rc->setWhereArray(array("rcRelateDataNo"=>$_GET["id"],"rcType"=>$_GET["rctype"]));
$rcData = $rc->getWithConditions();

$tpi->setWhereArray(array("rcNo"=>$rcData[0]["rcNo"]));
$tpiData = $tpi->getWithConditions();
*/ 
$data = array('201712225023','201805255092','201803205082','201806275122','201802215157','201711235043','201709045043','201803155114','201805195085','201805145139','201803025034','201805225106','201805225001','201801315059','201712155018','201805125064','201710215054','201805165035','201803285099','201803155011','201707295015','201806295100','201712285049','201805015003','201708055006','201805155118','201710025029','201805175064','201806205092','201804225042','201804235095','201804215011','201804215042','201712295045','201711295020','201805245065','201806045042','201801225065','201805275059','201806055109','201805275064','201802205074','201804265085','201805145100','201803215081','201803285028','201807045098','201801265057','201710155024','201804085072','201803245003','201802075002','201804035083','201806095032','201709185026','201802135063','201705095037','201705155081','201711235018','201805245092','201805245092','201805085090','201805035041','201804095052','201806185004','201805255070','201804265072','201711155090','201712085078','201805225081','201805225081','201806285043','201710115055','201712125031','201705225068','201708135009','201805045046','201801205058','201712215087','201711045087','201806065067','201806255122','201805285039','201803015074','201803015062','201707105034','201708125014','201712155006','201805105090','201804165053','201708175037','201802195062','201804185082','201805225055','201805235074','201801235025','201804065021','201803175093','201709195030','201805275109','201806255088','201801245032','201806265163','201804295020','201708195022','201710295057','201803015062','201804135033','201804175032','201802045003','201706025029','201803305001','201805095088','201804115003','201804135001','201801185036','201710065034','201704085009','201804135070','201711195048','201710205036','201710105013','201804185011','201711185022','201803225027','201804185067','201806225112','201709265059','201801055024','201806095045','201804175117','201805115018','201806225112','201708025031','201712245051','201708115021','201804165002','201803155036','201805185065','201705105017','201708215041','201707145020','201710115028','201801225003','201805215135','201708105002','201712215026','201805185006','201805185099','201709155021','201806185050','201712225056','201806215110','201709205093','201710275001','201708295009','201709255015','201712285007','201802085002','201804035049','201804075047','201804095023','201804265006','201804305097','201805225098','201806215144','201805305003','201802265062','201806245098','201806105060','201802135046','201803145055','201805185071','201706195003','201804195071','201804195071','201806255017','201802195015','201712215085','201711135004','201802225009','201804155061','201805235019','201805295022','201801105066','201805235019','201805295022','201801105066','201801195014','201803095044','201805285007','201804265087','201805255083','201801225023','201802215030','201802025056','201801115041','201806185013','201805185009','201801135033','201803175061','201802255060','201806095106','201712165037','201805105109','201806165022','201805265067','201705175012','201705165061','201801215058','201805025102','201801195047','201709225011','201806195139','201709215089','201708255028','201706275004','201711105030','201804225064','201803015006','201805215033','201711165066','201806135014','201805015076','201804145065','201806075152','201806095052','201804065019','201707165032','201709065008','201804125024','201712115070','201710145016','201804215036','201802055053','201708185013','201710065055','201806225081','201801115067','201805225005','201801255092','201805075037','201805195062','201805215067','201801215079','201803285045','201802075024','201710045024','201806275041','201801285036','201802215180','201709295031','201710315009','201711285105','201806015119','201806045045','201711015036','201801055047','201805065073','201805245012','201711215074','201708115021','201804035044','201709105038','201712135028','201803065053','201801115024','201805135027','201707185012','201806135021','201805275114','201712235049','201805165062','201805215137','201712185047','201803255031','201804245006','201803245026','201803215079','201805285036','201709265140','201709275011','201802195084','201708015001','201708315002','201804295069','201806095031','201806155055','201805055055','201710115079','201805145118','201709105001','201705165002','201710205013','201806175052','201711185055','201801165075','201801273001','201801215036','201801245078','201803143005','201801195051','201801215050','201801225007','201803245010','201711035076','201806275058','201806285124','201803305009','201805305062','201801285024','201709225051','201803315077','201803025052','201705055023','201705085030','201802095071','201802275043','201805075137','201806085080','201805025113','201711135044','201805275042','201710065004','201708065017','201709265057','201801175004','201806165064','201712215084','201801255069','201804225009','201806155075','201806235021','201805285038','201806265053','201806275090','201805135017','201804285017','201712245055','201807015068','201806025059','201806025075','201806295027','201803025028','201802075005','201806045054','201806065096','201803125074','201709135021','201806195133','201804215076','201712025010','201711065084','201805025133','201805115034','201805135035','201710115063','201801135030','201802145034','201805095051','201710275044','201801205059','201805235039','201712235047','201801315073','201805235064','201803095086','201711285022','201804025073','201805015063','201805055090','201806055106','201801305039','201805065040','201806045106','201711065084','201802125005','201804075090','201805145076','201804305068','201703245070','201806015017','201804045075','201710305058','201710285052','201709155005','201806135033','201803215102','201806205173','201806225047','201709195025','201806255126','201801175058','201803275015','201805255084','201707095005','201710255050','201704255026','201806015017','201807015003','201802235024','201804275101','201804045075','201804105017','201805075115','201805295105','201806125074','201806125136','201710285052','201711105024','201804115013','201708145003','201804015001','201802025057','201805275015','201711065007','201802025049','201805095121','201711135006','201801225005','201804195062','201711235004','201802035016','201802135071','201801115058','201802195063','201803235055','201711225072','201805265055','201806275013','201803205090','201803275081','201806265153','201804245083','201707315054','201708315007','201807025037','201707315050','201805055093','201805285096','201711015063','201711295019','201711295048','201804045073','201708045053','201708115026','201707135009','201801175064','201806115129','201804115080','201704145003','201709135007','201805145075','201803075043','201712155063','201804135082','201804135097','201804155036','201708245019','201712205001','201805185015','201803205021','201711035051','201804245031','201802255077','201805205065','201806235101','201705225049','201709265042','201802215177','201802255044','201802045061','201711035096','201802055028','201804285079','201802105047','201806115062','201803145025');

?>
<style>
tr:nth-child(2n) td{
	background-color:#E3EAEB;
}
</style>
<table cellspacing="0" cellpadding="4" id="GridView1" style="color:#333333;width:100%;border-collapse:collapse;">
	<tbody>
		<tr style="color:White;background-color:#1C5E55;font-weight:bold;">
			<th scope="col">案件編號</th>
			<th>RcNo</th>
			<th>還款日期</th>
			<th scope="col">是否是樂分期案件</th>
		</tr>
		<?php
			foreach($data as $key => $value){
				$sql = "SELECT `rcCaseNo`,`rcNo` FROM `real_cases` WHERE `rcCaseNo` = '".$value."' ";
				$nadData = $rc->customSql($sql);
				if($nadData != ""){
					$sql = "SELECT `prDate` FROM `pay_records` where rcNo = '".$nadData['0']['rcNo']."' order by prNo desc limit 1";
					$paydate = $rc->customSql($sql);
					echo "<tr align='center'>
						<td>".$value."</td>
						<td>".$nadData['0']['rcNo']."</td>
						<td>".$paydate['0']['prDate']."</td>
						<td>1</td>
					</tr>";
				}else{
					echo "<tr align='center'>
						<td>".$value."</td>
						<td>NaN</td>
						<td>NaN</td>
						<td>0</td>
					</tr>";
				}
			}
		?>
	</tbody>
</table>

<?php 

?>