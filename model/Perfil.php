<?php
class Perfil
{
    private ?int $id;
    private ?string $usuario;
    private ?string $senha;

    

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     */
    public function setUsuario(?string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha(): ?string
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha(?string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }
}
?>