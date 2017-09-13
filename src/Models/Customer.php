<?php 

class Customer 
{
	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $firstName;

	/**
	 * @var string
	 */
	private $lastName;

	/**
	 * @param int $id
	 *
	 * @return Customer
	 */
	public function setId(int $id) : Customer
    {
        $this->id = $id;
        return $this;
    }

	/**
	 * @param string $firstName
	 *
	 * @return Customer
	 */
	public function setFirstName(string $firstName) : Customer
    {
        $this->firstName = $firstName;
        return $this;
    }

	/**
	 * @param string $lastName
	 *
	 * @return Customer
	 */
	public function setLastName(string $lastName) : Customer
    {
        $this->lastName = $lastName;
        return $this;
    }

	/**
	 * @return int
	 */
	public function getId() : int
    {
        return (int) $this->id;
    }

	/**
	 * @return string
	 */
	public function getFirstName() : string
    {
        return $this->firstName;
    }

	/**
	 * @return string
	 */
	public function geLastName() : string
    {
        return $this->lastName;
    }
}
