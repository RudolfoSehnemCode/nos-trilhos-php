<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Auth.php';

class AuthTest extends TestCase
{
    protected function setUp(): void
    {
        $_SESSION = [];
    }

    public function testNaoEstaLogadoQuandoSessaoVazia()
    {
        $auth = new Auth();
        $resultado = $auth->isLoggedIn();
        $this->assertFalse($resultado);
    }

    public function testEstaLogadoDepoisDoLogin()
    {
        $auth = new Auth();
        $usuario = ['id' => 1, 'nome' => 'Rudolfo'];

        $auth->loginUser($usuario);
        $resultado = $auth->isLoggedIn();

        $this->assertTrue($resultado);
    }


}