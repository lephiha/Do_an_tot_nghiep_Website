<?php
    /**
     * dash board controller
     */
    class TreatmentController extends Controller
    {
        public function process()
        {
            $AuthUser = $this->getVariable("AuthUser");
            if (!$AuthUser){
                header("Location: ".APPURL."/login");
                exit;
            }



            $valid_roles = ["admin", "member"];
            $role_validation = in_array($AuthUser->get("role"), $valid_roles);
            if( !$role_validation )
            {
                header("Location: ".APPURL."/dashboard");
                exit;
            }

            $this->view("treatment");
        }
    }
?>