
    <?php
    class Usuario{
    private $nome;
    private $tel;
    private $user;
    private $pass;
    private $email;
    private $cpf;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

   
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

   
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

   
    public function getEmail()
    {
        return $this->email;
    }

   
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getCpf()
    {
        return $this->cpf;
    }

    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}
