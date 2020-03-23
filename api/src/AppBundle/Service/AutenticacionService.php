<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Response;

class AuthenticacionService
{
    protected $g_entityManager;

    public function __construct($s_entityManager)
    {
        $this->g_entityManager = $s_entityManager;
    }

    /**
     * Valdiar Sesión 
     *
     * @return mixed[Response|Usuarios]
     */
    public function authenticar(string $p_usuario, string $p_claveacceso)
    {
        if (!$p_usuario)
        {
            return new Response("Por favor ingrese el usuario", 300, array("Content-Type" => "application/json"));
        }

        if (!$p_claveacceso)
        {
            return new Response("Por favor ingrese la clave de acceso", 300, array("Content-Type" => "application/json"));
        }
        
        $em = $this->g_entityManager->getManager();

        // hash('sha256', $p_claveacceso)
        $e_usuario = $em->getRepository("AppBundle:Usuarios")->findOneBy(array(
            "usuario" => $p_usuario
            , "claveacceso" => $p_claveacceso
        ));

        if (!$e_usuario)
        {
            return new Response("Usuario o clave de acceso inválidos", 404, array("Content-Type" => "application/json"));
        }

        $v_tokenParams = array(
            'id' => $e_usuario->getId(),
            'usuario' => $e_usuario->getUsuario(),
            'claveacceso' => $e_usuario->getClaveacceso(),
            'start' => time(),
            'expiration' => time() + (60 * 60 * 1)
        );
        
        $v_token = $this->g_connection->jwtEncode($v_tokenParams);

        $e_usuario->setToken($v_token);
        $em->persist($e_usuario);
        $em->flush();

        return $e_usuario;
    }


    /**
     * Valdiar Sesión 
     *
     * @return mixed[Response|Usuarios]
     */
    public function validarSesion(string $p_token): bool
    {
        if ($p_token === "")
        {
            return new Response("Permiso denegado", 400, array("Content-Type" => "application/json"));
        }
        
        $v_tokenParams = $this->g_connection->jwtDecode($p_token);
        
        $em = $this->g_entityManager->getManager();
        $e_usuario = $em->getRepository("AppBundle:Usuario")->findOneBy(array(
            "id" => $v_tokenParams->id
            , "username" => $v_tokenParams->usuario
            , "claveacceso" => $v_tokenParams->claveacceso
            , "token" => $p_token
        ));
        
        if (!$e_usuario)
        {
            return new Response("Por favor inicia sesión", 400, array("Content-Type" => "application/json"));
        }

        if ($v_tokenParams->expiration < time())
        {
            return new Response("La sesión ha expirado", 400, array("Content-Type" => "application/json"));
        }

        return $e_usuario;        
    }
}