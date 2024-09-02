<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * absensi_guru_id_guru_option_list Model Action
     * @return array
     */
	function absensi_guru_id_guru_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_guru AS value,nama AS label FROM data_guru ORDER BY nama ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * absensi_siswa_id_siswa_option_list Model Action
     * @return array
     */
	function absensi_siswa_id_siswa_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_siswa AS value,nama AS label FROM data_siswa ORDER BY nama ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_nama_value_exist Model Action
     * @return array
     */
	function user_nama_value_exist($val){
		$db = $this->GetModel();
		$db->where("nama", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

}
