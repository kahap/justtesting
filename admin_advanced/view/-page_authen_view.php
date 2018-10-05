<?php 

$api = new API("real_cases");
$apiMem = new API("member");
$apiAau = new API("admin_advanced_user");

if(isset($already)){
// 	$api->setWhereArray(array("rcIfCredit"=>"1","rcIfAuthen"=>"1"));
	$sql = "select * from real_cases where rcIfCredit = 1 and rcIfCredit = 1 order by rcCaseNo desc";
}else{
// 	$api->setWhereArray(array("rcStatus"=>2,"rcIfCredit"=>"1","rcIfAuthen"=>"0"));
// 	$api->setOrArray(array("rcStatus"=>3,"rcStatus"=>4,"rcStatus"=>5,"rcStatus"=>7));
	$sql = "select * from real_cases where (aauNoAuthen != '' or aauNoAuthen != NULL) and rcIfCredit = 1 and rcIfAuthen = 0 and rcStatus = 2 order by rcCaseNo desc";
}
// $api->setWhereNotArray(array("aauNoAuthen"=>""));
// $api->setOrderArray(array("rcCaseNo"=>true));
$data = $api->customSql($sql);
$aarNo = array('1','4','6','7','8','9','10');
?>
<main class="mn-inner">
	<div class="row">
		<div class="col s12">
			<div class="page-title">授信作業 - 可進行授信作業案件列表</div>
		</div>
		<div class="col s12 m12 l12">
			<div class="card">
				<div class="card-content">
					<span class="card-title">請選擇欲授信之案件</span>
   					<table id="example" class="display responsive-table datatable-example">
						<thead>
     						<tr>
								<th>編號</th>
								<th>案件編號</th>
								<th>申請人姓名</th>
								<th>身分證字號</th>
								<th>身分別</th>
								<th>訂單狀態</th>
								<th>案件類別</th>
								<th>徵信狀態</th>
								<th>授信狀態</th>
								<th>指派授審人員</th>
     						</tr>
						</thead>
     					<tbody>
     					<?php 
     					if($data != null){
     						foreach($data as $key=>$value){
     							$aarNoS = json_decode($_SESSION['adminUserData']['aarNo']);
     							if(in_array(1,$aarNoS)||in_array(6,$aarNoS)){ // 6 授信主管 + 1 最強管理員
	     							$memData = $apiMem->getOne($value["memNo"]);
	     							$aauData = $apiAau->getOne($value["aauNoAuthen"]);
     							?><?php 
									//未滿20歲註記
									$mark = (AgeOver20($memData[0]["memBday"]) < '20') ? '*':'';
								
// 								if($_SESSION['adminUserData']['aauName'] == $aauData[0]["aauName"]){ 
     					?>
     						<tr>
     							<td><?php echo $key+1; ?></td>
     							<td>
     								<a href="?page=authen&type=insert&no=<?php echo $value["rcNo"]; ?>"><?php echo $value["rcCaseNo"]; ?></a>
     							</td>
     							<td><?php echo $memData[0]["memName"]; ?><font style="color:red"><?php echo $mark; ?></font></td>
     							<td><?php echo $memData[0]["memIdNum"]; ?></td>
								<td><?php echo $memData[0]["memClass"] != "" ? $apiMem->memClassArr[$memData[0]["memClass"]] : "無"; ?></td>
     							<td><?php echo $api->statusArr[$value["rcStatus"]]; ?></td>
								<td><?php echo $api->category[$value["rcType"]]; ?></td>
     							<td><?php echo $value["rcIfCredit"] == "0" ? "尚未審核" : "已審核"; ?></td>
     							<td><?php echo $value["rcIfAuthen"] == "0" ? "尚未審核" : "已審核"; ?></td>
     							<td><?php echo $aauData[0]["aauName"]; ?></td>
     						</tr>
     					<?php 
								}elseif(in_array($_SESSION['adminUserData']['aarNo'],$aarNo)){
						?>
							<tr>
     							<td><?php echo $key+1; ?></td>
     							<td>
     								<a href="?page=authen&type=insert&no=<?php echo $value["rcNo"]; ?>"><?php echo $value["rcCaseNo"]; ?></a>
     							</td>
     							<td><?php echo $memData[0]["memName"]; ?><font style="color:red"><?php echo $mark; ?></font></td>
     							<td><?php echo $memData[0]["memIdNum"]; ?></td>
								<td><?php echo $memData[0]["memClass"] != "" ? $apiMem->memClassArr[$memData[0]["memClass"]] : "無"; ?></td>
     							<td><?php echo $api->statusArr[$value["rcStatus"]]; ?></td>
								<td><?php echo $api->category[$value["rcType"]]; ?></td>
     							<td><?php echo $value["rcIfCredit"] == "0" ? "尚未審核" : "已審核"; ?></td>
     							<td><?php echo $value["rcIfAuthen"] == "0" ? "尚未審核" : "已審核"; ?></td>
     							<td><?php echo $aauData[0]["aauName"]; ?></td>
     						</tr>

						<?php
								}
     						}
     					}
     					?>
     					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>

<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        language: {
            searchPlaceholder: '尋找關鍵字',
            sInfo: "從 _START_ 到 _END_ ，共 _TOTAL_ 筆",
            sSearch: '',
            sLengthMenu: '顯示數 _MENU_',
            sLength: 'dataTables_length',
            oPaginate: {
                sFirst: '<i class="material-icons">chevron_left</i>',
                sPrevious: '<i class="material-icons">chevron_left</i>',
                sNext: '<i class="material-icons">chevron_right</i>',
                sLast: '<i class="material-icons">chevron_right</i>' 
            }
        },
	    "aoColumnDefs": [{
	        'bSortable': false,
	        'aTargets': [0]
	      } //disables sorting for column one
	    ],
	    "order": [[ 1 , "asc" ]],
	    "iDisplayLength": 100
    	
    });
    $('.dataTables_length select').addClass('browser-default');
});
</script>