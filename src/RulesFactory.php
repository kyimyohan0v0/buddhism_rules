<?php

namespace KyiMyoHan\BuddhismRules;

class RulesFactory
{
    protected $rules = [
        'stole' => 'Will be purnished in hell and stolen again in after life.',
        'lied'   => 'Will be poured with iron water in hell and his tooth will not be beautiful in after life.'
    ];
    protected $do_something = '';
    protected $result = 'No Sin';

    public function __construct(array $rules = [])
    {
        if($rules) {
            $this->rules = $rules;
        }
    }

    public function getRules() {
        return $this->rules;
    }

    protected function getRule($action) {
        return $this->rules[$action];
    }

    protected function setResult($result)
    {
        $this->result = $result;
    }

    protected function getResult()
    {
        return $this->result;
    }

    protected function setAction($action)
    {
        $this->do_something = $action;
    }

    protected function getAction()
    {
        return $this->do_something;
    }

    protected function does_rule_exist($action) {
        return array_key_exists($action, $this->getRules());
    }
    

    public function saw($something) {
        $this->setAction($something);
    }

    protected function isItSin($action) {
        if ($this->does_rule_exist($action)) {
            $this->setResult($this->getRule($action));
        }
    }

    public function beleives() {
        $words = $this->letterToArray($this->getAction());

        foreach($words as $action) {
            $this->isItSin($action);
        }

        return $this->getResult();
    }

    /** Helper */
    protected function letterToArray($letter) {
        return explode(' ', $letter);
    }
    
}