<?php
class ChangePassword {
    private $correctId = "01375";
    private $correctOldPassword = "betulini27";
    
    protected $inputId;
    protected $inputOldPassword;
    protected $inputPassword1;
    protected $inputPassword2;
    
    public function __construct($inputId, $inputOldPassword, $inputPassword1, $inputPassword2) {
        $this->inputId = $inputId;
        $this->inputOldPassword = $inputOldPassword;
        $this->inputPassword1 = $inputPassword1;
        $this->inputPassword2 = $inputPassword2;
    }
    
    public function isValidId() {
        if ($this->inputId === $this->correctId) {
            return true;
        } else {
            return false;
        }
    }
         
    public function isValidOldPassword() {
        if ($this->inputOldPassword === $this->correctOldPassword) {
            return true;
        } else {
            return false;
        }
    }
     
    public function isValidPassword () {
        if ($this->inputPassword1 === $this->inputPassword2) {
            return true;
        } else {
            return false;
        }
     }
     
     public function save() {
        if (!$this->isValidId()) {
            echo "Id akun tidak valid";
        } else if (!$this->isValidOldPassword()) {
            echo "Password lama tidak sesuai";
        } else if (!$this->isValidPassword()) {
            echo "Password1 dan password2 tidak sesuai";
        } else {
            echo "Sukses, password berhasil diperbarui";
        }
     }
}

$inputId = "01375";
$inputOldPassword = "betulini27";
$inputPassword1 = "aqs12345";
$inputPassword2 = "aqs12345";

$changePassword = new ChangePassword($inputId, $inputOldPassword, $inputPassword1, $inputPassword2);
$changePassword->save();
?>
