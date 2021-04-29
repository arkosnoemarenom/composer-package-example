<?php



namespace ComposerPackageExample;



class ModelSpec {



    public $firstname;



    public function __construct () {

        $this->firstname = "";
    }



    public function GetFirstname () : string {

        return $this->firstname;
    }



    public function SetFirstname ( string $_firstname ) : ModelSpec {

        $this->firstname = $_firstname;
        return $this;
    }
}
