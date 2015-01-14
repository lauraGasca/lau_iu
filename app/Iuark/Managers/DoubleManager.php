<?php namespace Iuark\Managers;

abstract class DoubleManager
{

    protected $data;
    protected $errors;

    public function __construct($data)
    {
        $this->data = array_only($data, array_keys($this->getRules()));
    }

    abstract public function getRules();

    public function isValid()
    {
        $rules = $this->getRules();
        $validation = \Validator::make($this->data, $rules);

        $isValid = $validation->passes();
        $this->errors = $validation->messages();

        return $isValid;
    }

    public function getErrors()
    {
        return $this->errors;
    }

}

?>