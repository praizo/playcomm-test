<?php   


    class Guest
    {
        protected $conn;			
        function __construct()
        {
            $this->conn = new Mysqli('localhost','root','','guestlist');
        }

        public function attendance($fname, $lname, $email, $event_id)
        {
            $sql = "INSERT INTO guests SET fname = '$fname', lname = '$lname', email = '$email', event_id ='$event_id'";
            $this->conn->query($sql);
            $id = $this->conn->insert_id;

            if ($id > 0) {
               
                // header("location:profile.php?status='uploaded'");
            }else {
                // header("location:profile.php?status='uploadfailed'");
            }
        }

        public function getEvent()
        {
            $sql = "SELECT * FROM events WHERE status = 'active'";
            $result = $this->conn->query($sql);


            $lists = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $lists[] = $row;
                }

                return $lists;
            }
        }


        public function attendeeEvent($id)
        {
            $sql = "SELECT * FROM guests WHERE event_id = '$id'";

            $result = $this->conn->query($sql);


            $lists = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $lists[] = $row;
                }

                return $lists;
            }

        }

    }
    


?>