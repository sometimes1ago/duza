<?php

final class User
{
    public function __construct(
        protected int $id,
        protected string $login,
        protected string $password,
        protected string $email,
        protected string $role,
    ) {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }

    /**
     * Method which return the id of current autentificated user
     * @return int Id of current autentificated user
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Method which return the login (nickname) of current autentificated user
     * @return string Login of current autentificated user
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * Method which return the password of current autentificated user
     * @return string Password of current autentificated user
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Method which return the email of current autentificated user
     * @return string Email of current autentificated user
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Method which return the role of current autentificated user
     * @return string Role of current autentificated user
     */
    public function getRole(): string
    {
        return $this->role;
    }


    /** Setters method. All data must be validated before call this methods */

    /**
     * Method which set new login for current autentificated user
     * @param string New login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * Method which set new password for current autentificated user.
     * It hash new password automatically
     * @param string New password
     */
    public function setPassword(string $password): void
    {
        $this->password = hash('sha256', $password);
    }

    /**
     * Method which set new email for current autentificated user
     * @param string New email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Method which set new role for current autentificated user.
     * Role must be selected from dropdown. Prohibited to enter role manually
     * @param string New role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}
