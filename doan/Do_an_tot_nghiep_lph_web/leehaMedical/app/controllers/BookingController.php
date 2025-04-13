<?php
    /**
     * dash board controller
     */
    class BookingController extends Controller
    {
        public function process()
        {
            $AuthUser = $this->getVariable("AuthUser");
            if (!$AuthUser){
                header("Location: ".APPURL."/login");
                exit;
            }

            $Route = $this->getVariable("Route");
            $this->setVariable("id", 0);
            if( isset($Route->params->id) )
            {
                $this->setVariable("id", $Route->params->id);
                $this->view("booking");
            }
            else
            {
                header("Location: ".APPURL."/bookings");
                exit; 
            }
            
        }
    }
?>