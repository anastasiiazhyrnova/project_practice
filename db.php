<?php
    class ClinicDB {
        private $errText = "";
        private $conn;
        var $isSignedIn;

        function getErrText(){
            return $this->errText;
        }
        function connect(){
            try{
                $serverName = "DESKTOP-DBRQ0BA";
                $connectionOptions = [ 
                    "Database" => "clinic",
                    "Uid" => "",
                    "PWD" => "",
                    "CharacterSet" => "UTF-8"
                ];
                $this->conn = sqlsrv_connect($serverName, $connectionOptions);
                if($this->conn == false){
                    $this->errText = sqlsrv_errors();
                    echo 'ERROR';
                }
                return true;
            }
            catch(Exception $ex){
                $this->errText ='An error occured';
                return false;
            }
        }
        function disconnect(){
            sqlsrv_close($this->conn);
        }
        function makeQuery($sqlText, $params=[], $fig_disconnect = true) {
            $this->errText = ""; 
            $result = []; 
            try {
                if ($this->conn || $this->connect()){
                    $sql_stmt = sqlsrv_query($this->conn, $sqlText, $params);
                
                    if (!$sql_stmt) {
                        $this->errText = sqlsrv_errors();
                        echo 'wrong query';
                        return false;
                    }
                    while($row = sqlsrv_fetch_array($sql_stmt, SQLSRV_FETCH_ASSOC)) {
                        $result[] = $row;
                    }
                    sqlsrv_free_stmt($sql_stmt);
                    return $result;
                }
            
            }
            catch(Exception $e) {
                $this->errText = "An error occured"; 
                return false;
            }
        }
        function auth(){
	        if ( !empty($_POST['password']) && !empty($_POST['email']) ) {
		        $login = $_POST['email']; 
		        $password = $_POST['password'];
		        $sqlText = "select email, password from users where email='{$login}' and password='{$password}'";
		        $user = $this->makeQuery($sqlText);
                
		        if (!empty($user)) {
		        	session_start();
		        	$_SESSION['auth'] = true; 
                    $_SESSION['user'] = true;
		        	$_SESSION['login'] = $user[0]['email'];
                    
                    header('Location: user_account.php'); 
		        } else {
                    $this->isSignedIn = "Невірно введені дані";
		        }
	        }
        }
        function register(){
            if(isset($_POST['submit']) && !empty($_POST)){
                $surname = $_POST['surname'];
                $name = $_POST['name'];
                $patronymic = $_POST['patronymic'];
                $gender = $_POST['gender'];
                $birth_date = $_POST['birth_date'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role='user';
                $tsql= "insert into users (surname, name, patronymic, gender, birth_date, email, password, role) VALUES (?,?,?,?,?,?,?,?);";
                $params = [$surname,$name,$patronymic,$gender,$birth_date,$email,$password,$role];
                $user = $this->makeQuery($tsql, $params);
                header('Location: auth.php'); 
            }
        }
        

    }
?>
