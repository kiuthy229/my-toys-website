<?php
    include ('dbconnect.php');

    class ProductCRUD{

        private $msg="";
        
    public function getMsg(){
        return $this->msg;
    }
    public function readProducts(){
        $data=array();

        try{
            global $connString;
            $conn= pg_connect($connString);
            if($conn == false){
                echo"Unable to connect PostgreSQL Server";
                return $data;
            }   

            $query= 'select code, name, price, image, details from "products"';
            $result= pg_query($conn, $query);
            while($row= pg_fetch_row($result)){
                array_push($data, array("code"=>$row[0], "name"=>$row[1], "price"=>$row[2],
                                        "image"=>$row[3], "details"=>$row[4] ));        
            }
            pg_close($conn);
        }
        catch (Exception $e){
            $this->msg= $e-> getMessage();
        }
        return $data;
    }
    public function createProduct($code,$name,$price,$image,$details){
        $success= -1;
        try{
            global $connString;
            $conn = pg_connect($connString);
            if($conn === false){
                $this->msg = "Unable to connect PostgreSQL Server";
                return $success;
            }
            $query='insert into "products"(code, name, price, image, details)
            values ($1,$2,$3,$4,$5) returning code';
            $params = array(&$code, &$name, &$price, &$image, &$details);
            $res = pg_query_params($conn, $query,$params);
            $row = pg_fetch_row($row);
            $success =$row[0];
            pg_close($conn);
        }
        catch(Exception $e){
            $this->msg = $e->getMessage();
            $success= -1;
        }
    }
    public function deleteProduct ($code){
        $success =-1;
        try{
            global $connString;
            $conn = pg_connect($connString);
            if($conn === false){
                $this->msg = "Unable to connect PostgreSQL Server";
                return $success;
            }
            $query='delete from "products" where code=$1';
            $params = array(&$code);
            $res = pg_query_params($conn, $query,$params);
            $row = pg_fetch_row($row);
            if ($res== FALSE){
                $this->msg ="Error in executing query";
                return $success;
            }
            $num_rows=pg_affected_rows($res);
            $success=$num_row;
            $this->msg ="";
            pg_close($conn);
        }catch(Exception $e){
            $this->msg = $e->getMessage();
            $success= -1;
        }
    }
    public function updateProduct ($code,$name,$details,$price,$image){
        $success =-1;
        try{
            global $connString;
            $conn = pg_connect($connString);
            if($conn === false){
                $this->msg = "Unable to connect PostgreSQL Server";
                return $success;
            }
            $query='update "products" set name=$2, details=$3, price=$4, image=$5 where code=$1';
            $params = array(&$code,&$name,&$details,&$price,&$image);
            $res = pg_query_params($conn, $query,$params);
            $row = pg_fetch_row($row);
            if ($res=== FALSE){
                $this->msg ="Error in executing query";
                return $success;
            }
            $num_rows=pg_affected_rows($res);
            $success=$num_row;
            $this->msg ="";
            pg_close($conn);
        }catch(Exception $e){
            $this->msg = $e->getMessage();
            $success= -1;
        }
        return $success;
    }   
    public function login($username, $password){
        $success =-1;
        try{
            global $connString;
            $conn = pg_connect($connString);
            if($conn === false){
                $this->msg = "Unable to connect PostgreSQL Server";
                return $success;
            }
        
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "You cannot leave the username or passwork blank!";
		}else{
			$query = 'select username from "users" where username=$1';
            $params = array(&$username);
            $res = pg_query_params($conn, $query,$params);
			$num_rows = pg_num_rows($res);
			if ($num_rows==0) {
				echo "Wrong username";
			}else{
                $query = 'select password from "users" where password=$1';
                $params = array(&$password);
                $res = pg_query_params($conn, $query,$params);
                $num_rows = pg_num_rows($res);
                if ($num_rows==0) {
				echo "Wrong password";
			}else{
				$_SESSION['username'] = $username;
                header('Location: admin.php');
            }
			}
        }
    }catch(Exception $e){
        $this->msg = $e->getMessage();
        $success= -1;
    }
	}
    
}
?>