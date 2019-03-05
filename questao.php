<?php
    
    class Questao {

    	private $questao;
    	private $a1;
    	private $a2;
    	private $a3;
    	private $a4;
    	private $gab;

	    /**
	     * @return mixed
	     */
	    public function getQuestao()
	    {
	        return $this->questao;
	    }

	    /**
	     * @param mixed $questao
	     *
	     * @return self
	     */
	    public function setQuestao($questao)
	    {
	        $this->questao = $questao;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getA1()
	    {
	        return $this->a1;
	    }

	    /**
	     * @param mixed $a1
	     *
	     * @return self
	     */
	    public function setA1($a1)
	    {
	        $this->a1 = $a1;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getA2()
	    {
	        return $this->a2;
	    }

	    /**
	     * @param mixed $a2
	     *
	     * @return self
	     */
	    public function setA2($a2)
	    {
	        $this->a2 = $a2;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getA3()
	    {
	        return $this->a3;
	    }

	    /**
	     * @param mixed $a3
	     *
	     * @return self
	     */
	    public function setA3($a3)
	    {
	        $this->a3 = $a3;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getA4()
	    {
	        return $this->a4;
	    }

	    /**
	     * @param mixed $a4
	     *
	     * @return self
	     */
	    public function setA4($a4)
	    {
	        $this->a4 = $a4;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getGab()
	    {
	        return $this->gab;
	    }

	    /**
	     * @param mixed $gab
	     *
	     * @return self
	     */
	    public function setGab($gab)
	    {
	        $this->gab = $gab;

	        return $this;
	    }
	
	}

?>