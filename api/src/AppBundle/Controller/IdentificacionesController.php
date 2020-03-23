<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Identificaciones;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class IdentificacionesController extends Controller
{
    /**
     * GET
     * @Route("/identificaciones/{id}", name="identificaciones_detalle")
     */
    public function detalleAction(int $id)
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $identificacion = $em->getRepository("AppBundle:Identificaciones")->find($id);

            if (!$identificacion)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($identificacion, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "identificaciones/detalle.html.twig", 
        //     array("identificacion" => $identificacion)
        // );
    }
    
    /**
     * GET
     * @Route("/identificaciones/", name="identificaciones_todos")
     */
    public function todosAction()
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $identificaciones = $em->getRepository("AppBundle:Identificaciones")->findAll();

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($identificaciones, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "identificaciones/index.html.twig",
        //     array("identificaciones" => $identificaciones)
        // );
    }
    
    /**
     * POST
     * @Route("/identificaciones/", name="identificaciones_crear")
     */
    public function crearAction(Request $request)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_identificacion = json_decode($request->get("source"));
            $identificacion = new Identificaciones();

            $identificacion->setDescripcion($p_identificacion->descripcion);
            $identificacion->setCreatedat(new DateTime("now"));
            $em->persist($identificacion);
            $em->flush();
            
            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "identificaciones/crear.html.twig",
        //     array()
        // );
    }
    
    /**
     * PUT
     * @Route("/identificaciones/{id}", name="identificaciones_actualizar")
     */
    public function actualizarAction(Request $request, int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_identificacion = $request->get("source");
            $identificacion = $em->getRepository("AppBundle:Usuarios")->find($id);
            
            if (!$identificacion)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $identificacion->setDescripcion($p_identificacion->descripcion);
            $identificacion->setUpdatedat(new DateTime("now"));
            $em->persist($identificacion);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "identificaciones/actualizar.html.twig", 
        //     array()
        // );
    }
    
    /**
     * DELETE
     * @Route("/identificaciones/{id}", name="identificaciones_eliminar")
     */
    public function eliminarAction(int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $identificacion = $em->getRepository("AppBundle:Identificaciones")->find($id);
            
            if (!$identificacion)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }
            
            $em->remove($identificacion);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "identificaciones/eliminar.html.twig",
        //     array()
        // );
    }
}