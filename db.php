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
                $serverName = "DESKTOP-Q4SMK7F";
                $connectionOptions = [ 
                    "Database" => "clinicdb",
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
		        $sqlText = "select email, password, role from users where email='{$login}' and password='{$password}'";
		        $user = $this->makeQuery($sqlText);
                
		        if (!empty($user)) {
		        	session_start();
		        	$_SESSION['auth'] = true; 
                    $_SESSION['user'] = true;
		        	$_SESSION['login'] = $user[0]['email'];
                    $_SESSION['role'] = $user[0]['role'];
                    if ($_SESSION['login'] == "admin@clinic.ua"){
                        header('Location: admin.php'); 
                    }

                    elseif ($_SESSION['role'] == "doctor"){
                        header('Location: doctor_account.php'); 
                    }
                    else{
                        header('Location: user_account.php'); 
                    }
                    
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


        function addClientAssign(){
            if(isset($_POST['addClient']) && !empty($_POST)){
                $surname = $_POST['surnameClient'];
                $name = $_POST['nameClient'];
                $patronymic = $_POST['patronymicClient'];
                //ДАТА НЕ ТА СТАВИТЬСЯ!
                $date = $_POST['date_assign'];

                $email = $_POST['emailClient'];
                $doctor = $_POST['doctorClient'];
                $doctorName = $_POST['docNameClient'];
        
                $tsql= "insert into assignments (surname, name, patronymic, email, doctor, name_doctor, date) VALUES (?,?,?,?,?,?,?);";
                $params = [$surname, $name, $patronymic, $email, $doctor, $doctorName,$date];
                $user = $this->makeQuery($tsql, $params);
                header('Location: admin.php'); 
            }
            else {
                $this->isSignedIn = "Невірно введені дані";
            }
        }

        function addDoctor(){
            if(isset($_POST['addDoc']) && !empty($_POST)){
                $surname = $_POST['surnameDoc'];
                $name = $_POST['nameDoc'];
                $patronymic = $_POST['patronymicDoc'];
                $gender = null;
                $birth_date = null;
                $email = $_POST['emailDoc'];
                $gender = $_POST['genderDoc'];
                $expc = $_POST['expcDoc'];
                $job = $_POST['jobDoc'];
                $password = $_POST['passwordDoc'];
                $role='doctor';

                $tsql= "insert into users (surname, name, patronymic, gender, birth_date, email, password, role) VALUES (?,?,?,?,?,?,?,?);";
                $params = [$surname,$name,$patronymic,$gender,$birth_date,$email,$password,$role];
                $user = $this->makeQuery($tsql, $params);
                $full_name = $surname . ' '. $name . ' ' . $patronymic;
                $rate = 5;
                
                $tsql2= "insert into doctors (name, job, gender, experience, rate) VALUES (?,?,?,?,?);";
                $params2 = [$full_name, $job, $gender, $expc, $rate];
                $user2 = $this->makeQuery($tsql2, $params2);
                header('Location: admin.php'); 
            }
        }
    }
?>
