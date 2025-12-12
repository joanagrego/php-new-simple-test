<?php
namespace App;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class SessionService
{
    private $session;
    
    public function __construct()
    {
        $storage = new NativeSessionStorage([
            'cookie_lifetime' => 3600
        ]);
        
        $this->session = new Session($storage);
    }
    
    public function setUser($userId)
    {
        $this->session->start();
        $this->session->set('user_id', $userId);
    }
    
    public function getUser()
    {
        return $this->session->get('user_id');
    }
}