<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helper/Format.php');
?>

<?php
class Complain
{
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function complainInsert($data, $files){
		$userArea = $this->fm->validation($data['userArea']);
		$body = $this->fm->validation($data['body']);
		$publish_date = $this->fm->validation($data['publish_date']);
		$userArea = mysqli_real_escape_string($this->db->link, $data['userArea']);
		$body = mysqli_real_escape_string($this->db->link, $data['body']);
		$publish_date = mysqli_real_escape_string($this->db->link, $data['publish_date']);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
   		 $file_name = $files['image']['name'];
   		 $file_size = $files['image']['size'];
    	 $file_temp = $files['image']['tmp_name'];

    	 $div = explode('.', $file_name);
   		 $file_ext = strtolower(end($div));
   		 $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    	 $uploaded_image = "uploads/".$unique_image;


    	 $userName = Session::get('user_name');

    	 if ($userArea == "" || $body == "" || $publish_date == "") {
    	 	$msg = "<span class='error'>Fields Should not empty.</span>";
				return $msg;
    	 }
    	 elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) == false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    }
    	 else{
	move_uploaded_file($file_temp, $uploaded_image);
	
    $query = "INSERT INTO tbl_complain(userArea, body, image, publish_date, user_name) 
    VALUES('$userArea','$body','$uploaded_image','$publish_date','$userName')";
	$complainInsert = $this->db->insert($query);

    // $query2 = "insert into tbl_bid(userArea,bid_start_from,name,email,phone,district,bid_data,user_name) VALUES ('$userArea','$bid_start_from','0','0',0,'0',0,'$userName')";
    // $forTableBid = $this->db->insert($query2);
			if ($complainInsert) {
				$msg = "<span class='success'>Complain Inserted Successfully.</span>";
				return $msg;
			} else{
				$msg = "<span class='error'>Complain Not Inserted.</span>";
				return $msg;
			}
		}
		}
		public function getAllProduct(){
			$userName = Session::get('user_name');
		$query = "SELECT * FROM tbl_complain where tbl_complain.user_name = '$userName'";
		$result = $this->db->select($query);
		return $result;
		}
		public function getAllProduct2(){
		$query = "SELECT *
					FROM tbl_complain
					ORDER BY complainId DESC";
		$result = $this->db->select($query);
		return $result;
		}
		public function getAllProduct3(){
		$query = "SELECT *
					FROM tbl_complain
					ORDER BY complainId DESC LIMIT 9";
		$result = $this->db->select($query);
		return $result;
		}
		public function getSingleProduct($id){
				$query = "select * from tbl_complain where complainId = '$id'";
		$result = $this->db->select($query);

		return $result;
		}


		public function productByBank($id){
			$userName = mysqli_real_escape_string($this->db->link, $id);
			$query = "SELECT tbl_complain.*, user_reg.user_name
					FROM tbl_complain
					JOIN user_reg
					ON tbl_complain.user_name = user_reg.user_name 
		 			ORDER BY tbl_complain.complainId DESC";
		$result = $this->db->select($query);
		return $result;
		}

		public function getProductById($id) {
				$query = "SELECT *
					FROM tbl_complain
					WHERE complainId = '$id'";
		$result = $this->db->select($query);
		return $result;
		}

		public function complainUpdate($data, $files, $id){
		$userArea = $this->fm->validation($data['userArea']);
		$body = $this->fm->validation($data['body']);

		$userArea = mysqli_real_escape_string($this->db->link, $data['userArea']);
		$body = mysqli_real_escape_string($this->db->link, $data['body']);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
   		 $file_name = $files['image']['name'];
   		 $file_size = $files['image']['size'];
    	 $file_temp = $files['image']['tmp_name'];

    	 $div = explode('.', $file_name);
   		 $file_ext = strtolower(end($div));
   		 $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    	 $uploaded_image = "uploads/".$unique_image;

    	 if ($userArea == "" || $body == "") {
    	 	$msg = "<span class='error'>Fields Must Not Inserted.</span>";
				return $msg;
    	 } else {

    	 	if (!empty($file_name)) {

    	 if ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) == false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    }
    	 else{
    move_uploaded_file($file_temp, $uploaded_image);

    $query = "UPDATE tbl_complain
    			SET
    			userArea = '$userArea',
    			body        = '$body',
    			image       = '$uploaded_image',
    			publish_date = '$publish_date'
    			WHERE complainId = '$id'
    ";

    $complainUpdate = $this->db->update($query);
			if ($complainUpdate) {
				$msg = "<span class='success'>Complain Updated Successfully.</span>";
				return $msg;
			} else{
				$msg = "<span class='error'>Cmplain Not Updated.</span>";
				return $msg;
			}
		}
	} else{
    $query = "UPDATE tbl_complain
    			SET
    			userArea = '$userArea',
    			body        = '$body'
    			WHERE complainId = '$id'
    ";

    $complainUpdate = $this->db->update($query);
			if ($complainUpdate) {
				$msg = "<span class='success'>Complain Updated Successfully.</span>";
				return $msg;
			} else{
				$msg = "<span class='error'>Complain Not Updated.</span>";
				return $msg;
			}
	}
		}
	}
public function delProductById($id){
		$query = "SELECT * FROM tbl_complain WHERE complainId = '$id'";
		$getData = $this->db->select($query);
		if ($getData) {
			while ($delImg = $getData->fetch_assoc()) {
				$dellink = $delImg['image'];
				unlink($dellink);
			}
		}

		$delquery = "DELETE FROM tbl_complain WHERE complainId = '$id'";
		$deldata = $this->db->delete($delquery);
		if ($deldata) {
				$msg = "<span class='success'>Complain Deleted Successfully.</span>";
				return $msg;
			} else{
				$msg = "<span class='error'>Complain Not Deleted.</span>";
				return $msg;
			}
	}

}
?>
