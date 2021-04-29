<?php



namespace ComposerPackageExample;



class Model {



    public $_id;
    public $_spec;



    public function __construct () {

        $this->_id = "";
        $this->_spec = new ModelSpec();
    }



    public function GetID () : string {

        return $this->_id;
    }



    public function SetID ( string $_id ) : Model {

        $this->_id = $_id;
        return $this;
    }



    public function GetSpec () : ModelSpec {

        return $this->_spec;
    }
}
