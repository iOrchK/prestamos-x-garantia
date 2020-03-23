<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Refrendos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class RefrendosController extends Controller
{
    /**
     * GET
     * @Route("/clientes/{id}", name="clientes_detalle")
     */
    public function detalleAction(int $id)
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $cliente = $em->getRepository("AppBundle:Refrendos")->find($id);

            if (!$cliente)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($cliente, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clientes/detalle.html.twig", 
        //     array("clientes" => $clientes)
        // );
    }
    
    /**
     * GET
     * @Route("/clientes/", name="clientes_todos")
     */
    public function todosAction()
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $clientes = $em->getRepository("AppBundle:Refrendos")->findAll();

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($clientes, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clientes/index.html.twig",
        //     array("clientes" => $clientes)
        // );
    }
    
    /**
     * POST
     * @Route("/clientes/", name="clientes_crear")
     */
    public function crearAction(Request $request)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_clientes = json_decode($request->get("source"));
            $clientes = new Refrendos();

            $clientes->setNumerocliente($p_clientes->numerocliente);
            $clientes->setNombre($p_clientes->nombre);
            $clientes->setTelefono($p_clientes->telefono);
            $clientes->setDomicilio($p_clientes->domicilio);
            $clientes->setCorreo($p_clientes->correo);
            $identificacion = $em->getRepository("AppBundle:Identificaciones")->find($clientes->ididentificacion->id);
            $clientes->setIdidentificacion($identificacion);
            $clientes->setClaveidentificacion($p_clientes->claveidentificacion);
            $clientes->setCotitular($p_clientes->cotitular);
            $clientes->setObservaciones($p_clientes->observaciones);
            $clasificacion = $em->getRepository("AppBundle:Clasificaciones")->find($clientes->idclasificacion->id);
            $clientes->setIdclasificacion($clasificacion);
            $clientes->setActivo($p_clientes->activo);
            $clientes->setEliminado($p_clientes->eliminado);
            $usuario = $em->getRepository("AppBundle:Usuarios")->find($clientes->idcreadopor->id);
            $clientes->setIdcreadopor($usuario);
            $clientes->setCreatedat(new DateTime("now"));
            $em->persist($clientes);
            $em->flush();
            
            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clientes/crear.html.twig",
        //     array()
        // );
    }
    
    /**
     * PUT
     * @Route("/clientes/{id}", name="clientes_actualizar")
     */
    public function actualizarAction(Request $request, int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_clientes = $request->get("source");
            $clientes = $em->getRepository("AppBundle:Usuarios")->find($id);
            
            if (!$clientes)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $clientes->setNumerocliente($p_clientes->numerocliente);
            $clientes->setNombre($p_clientes->nombre);
            $clientes->setTelefono($p_clientes->telefono);
            $clientes->setDomicilio($p_clientes->domicilio);
            $clientes->setCorreo($p_clientes->correo);
            $identificacion = $em->getRepository("AppBundle:Identificaciones")->find($clientes->ididentificacion->id);
            $clientes->setIdidentificacion($identificacion);
            $clientes->setClaveidentificacion($p_clientes->claveidentificacion);
            $clientes->setCotitular($p_clientes->cotitular);
            $clientes->setObservaciones($p_clientes->observaciones);
            $clasificacion = $em->getRepository("AppBundle:Clasificaciones")->find($clientes->idclasificacion->id);
            $clientes->setIdclasificacion($clasificacion);
            $clientes->setActivo($p_clientes->activo);
            $clientes->setEliminado($p_clientes->eliminado);
            $usuario = $em->getRepository("AppBundle:Usuarios")->find($clientes->idcreadopor->id);
            $clientes->setIdcreadopor($usuario);
            $clientes->setUpdatedat(new DateTime("now"));
            $em->persist($clientes);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clientes/actualizar.html.twig", 
        //     array()
        // );
    }
    
    /**
     * DELETE
     * @Route("/clientes/{id}", name="clientes_eliminar")
     */
    public function eliminarAction(int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $clientes = $em->getRepository("AppBundle:Refrendos")->find($id);
            
            if (!$clientes)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }
            
            $em->remove($clientes);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clientes/eliminar.html.twig",
        //     array()
        // );
    }
}