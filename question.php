<?php
class Student
{
    private $_id;
    private $_name;

    public function __construct($i, $n)
    {
        $this->_id   = $i;
        $this->_name = $n;
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getName()
    {
        return $this->_name;
    }
}

class Answer
{
    private $_student;
    private $_answer1;
    private $_answer2;

    public function __construct($s, $ans1, $ans2)
    {
        $this->_student = $s;
        $this->_answer1 = $ans1;
        $this->_answer2 = $ans2;
    }
    public function getStudent()
    {
        return $this->_student;
    }
    public function getAnswer1()
    {
        return $this->_answer1;
    }
    public function getAnswer2()
    {
        return $this->_answer2;
    }
}

class Question
{
    private $_question1;
    private $_question2;

    public function __construct($q1, $q2)
    {
        $this->_question1 = $q1;
        $this->_question2 = $q2;
    }
    public function getQuestion1()
    {
        return $this->_question1;
    }
    public function getQuestion2()
    {
        return $this->_question2;
    }
}

$taro   = new Student(0, "taro");
$hanako = new Student(1, "hanako");

$question = new Question(
    "食べる時間は足りましたか",
    "苦手な食べ物をはありましたか"
);

