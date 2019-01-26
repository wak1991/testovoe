<?php

namespace ishop\base;

use ishop\Db;

abstract class Model{

	public $attributes = [];
	public $errors = [];
	public $rules = [];

	public function __construct(){
		Db::instance();
	}

    public function validate($data)
    {
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if ($v->validate()){
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

}