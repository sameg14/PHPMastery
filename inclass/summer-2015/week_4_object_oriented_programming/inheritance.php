<?php

class Student extends Person
{
    /**
     * An array of all courses that this student has taken
     *
     * @var array
     */
    protected $coursesTaken = array();

    /**
     * Add a course to the list of courses this student is taking
     *
     * @param string $courseName Name of the course this student is taking
     * @return Student
     */
    public function addCourse($courseName)
    {
        $this->coursesTaken[] = $courseName;

        return $this;
    }
}

class Instructor extends Person
{
    /**
     * List of course names this instructor is teaching
     *
     * @var array
     */
    protected $coursesTaught = array();

    /**
     * Add a course to the array of courses this instructor is teaching
     *
     * @param string $courseName Name of the course this instructor is teaching
     * @return Instructor
     */
    public function addCourse($courseName)
    {
        $this->coursesTaught[] = $courseName;

        return $this;
    }
}



class Person
{
    /**
     * Person's numeric identifier (generated by the database)
     *
     * @var int
     */
    protected $id;

    /**
     * Person's first and last name
     *
     * @var string
     */
    protected $name;

    /**
     * Person's billing address.
     *
     * @note  I should have named this property billingAddress for clarity
     *        The reason why I didn't is to illustrate the importance of documenting!
     *        If I would not have documented this, you would have to go through the code to figure it out.
     * @var string
     */
    protected $address;

    /**
     * Create a new person
     * @param int $id Primary key aca_user.user_id
     * @param string $name Full name
     * @param string $address Billing address
     */
    public function __construct($id, $name, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}



$student = new Student(123, 'Bill', '123 foo road');
$student->addCourse('PHP')->addCourse('Python')->addCourse('Ruby');

echo '<pre>';
print_r($student);


























echo 'Parent Class: '.get_parent_class($student);

if($student instanceof Person){
    echo 'Yeah';
}else{
    echo 'No';
}

echo "\n\n";









