<?php
    /**
     * personal controller
     */
    class PersonalController extends Controller
    {
        public function process()
        {
            $AuthUser = $this->getVariable("AuthUser");
            if (!$AuthUser){
                header("Location: ".APPURL."/login");
                exit;
            }

            $this->view("personal");
        }
    }
?>