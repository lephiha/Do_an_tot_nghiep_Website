<?php
    /**
     * dash board controller
     */
    class AppointmentRecordsController extends Controller
    {
        public function process()
        {
            $AuthUser = $this->getVariable("AuthUser");
            if (!$AuthUser){
                header("Location: ".APPURL."/login");
                exit;
            }

            $this->view("appointmentRecords");
        }
    }
?>