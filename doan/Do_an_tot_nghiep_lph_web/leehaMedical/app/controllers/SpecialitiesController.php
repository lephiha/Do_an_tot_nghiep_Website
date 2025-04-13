<?php
    /**
     * dash board controller
     */
    class SpecialitiesController extends Controller
    {
        public function process()
        {
            $AuthUser = $this->getVariable("AuthUser");
            if (!$AuthUser){
                header("Location: ".APPURL."/login");
                exit;
            }

            $this->view("specialities");
        }
    }
?>