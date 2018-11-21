<?php
	class Front_Manage{
		var $db;
		
		//建構函式
		public function Front_Manage(){
			$this->db = new WADB(SYSTEM_DBHOST, SYSTEM_DBNAME, SYSTEM_DBUSER, SYSTEM_DBPWD);
			return TRUE;
		}
		
		
		//取得所有分類
		public function getAllFM($column='*'){
			$sql = "select
						`".$column."`
					from
						`front_manage`";
			$data = $this->db->selectRecords($sql);
			return $data;
		}
		
		//編輯
		public function update($key,$str){
			$sql = "update
						`front_manage`
					set
						`".$key."`='".$str."'";
			
			$update = $this->db->updateRecords($sql);
			return $update;
		}
		
	}
?>