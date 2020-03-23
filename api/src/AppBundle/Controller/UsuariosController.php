<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class UsuariosController extends Controller
{
    /**
     * GET
     * @Route("/usuarios/{id}", name="usuarios_detalle")
     */
    public function detalleAction(int $id)
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $usuario = $em->getRepository("AppBundle:Usuarios")->find($id);

            if (!$usuario)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($usuario, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "usuarios/detalle.html.twig", 
        //     array("usuario" => $usuario)
        // );
    }
    
    /**
     * GET
     * @Route("/usuarios/", name="usuarios_todos")
     */
    public function todosAction()
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $usuarios = $em->getRepository("AppBundle:Usuarios")->findAll();

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($usuarios, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "usuarios/index.html.twig",
        //     array("usuarios" => $usuarios)
        // );
    }
    
    /**
     * POST
     * @Route("/usuarios/", name="usuarios_crear")
     */
    public function crearAction(Request $request)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_usuario = json_decode($request->get("source"));
            $usuario = new Usuarios();

            $usuario->setNombre($p_usuario->nombre);
            $usuario->setUsuario($p_usuario->usuario);
            $usuario->setClaveacceso($p_usuario->claveacceso);
            $usuario->setFoto($p_usuario->foto);
            $usuario->setActivo($p_usuario->activo);
            $usuario->setEliminado($p_usuario->eliminado);
            $usuario->setCreatedat(new DateTime("now"));
            $em->persist($usuario);
            $em->flush();
            
            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "usuarios/crear.html.twig",
        //     array()
        // );
    }
    
    /**
     * PUT
     * @Route("/usuarios/{id}", name="usuarios_actualizar")
     */
    public function actualizarAction(Request $request, int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_usuario = $request->get("source");
            $usuario = $em->getRepository("AppBundle:Usuarios")->find($id);

            if (!$usuario)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $usuario->setNombre($p_usuario->nombre);
            $usuario->setUsuario($p_usuario->usuario);
            $usuario->setClaveacceso($p_usuario->claveacceso);
            $usuario->setActivo($p_usuario->activo);
            $usuario->setFoto($p_usuario->foto);
            $usuario->setEliminado($p_usuario->eliminado);
            $usuario->setUpdatedat(new DateTime("now"));
            $em->persist($usuario);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "usuarios/actualizar.html.twig", 
        //     array()
        // );
    }
    
    /**
     * DELETE
     * @Route("/usuarios/{id}", name="usuarios_eliminar")
     */
    public function eliminarAction(int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $usuario = $em->getRepository("AppBundle:Usuarios")->find($id);

            if (!$usuario)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $em->remove($usuario);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "usuarios/eliminar.html.twig",
        //     array()
        // );
    }
}