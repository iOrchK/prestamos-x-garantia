<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clasificaciones;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class ClasificacionesController extends Controller
{
    /**
     * GET
     * @Route("/clasificaciones/{id}", name="clasificaciones_detalle")
     */
    public function detalleAction(int $id)
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $clasificacion = $em->getRepository("AppBundle:Clasificaciones")->find($id);

            if (!$clasificacion)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($clasificacion, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clasificaciones/detalle.html.twig", 
        //     array("clasificacion" => $clasificacion)
        // );
    }
    
    /**
     * GET
     * @Route("/clasificaciones/", name="clasificaciones_todos")
     */
    public function todosAction()
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $clasificaciones = $em->getRepository("AppBundle:Clasificaciones")->findAll();

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($clasificaciones, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clasificaciones/index.html.twig",
        //     array("clasificaciones" => $clasificaciones)
        // );
    }
    
    /**
     * POST
     * @Route("/clasificaciones/", name="clasificaciones_crear")
     */
    public function crearAction(Request $request)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_clasificacion = json_decode($request->get("source"));
            $clasificacion = new Clasificaciones();

            $clasificacion->setDescripcion($p_clasificacion->descripcion);
            $clasificacion->setCreatedat(new DateTime("now"));
            $em->persist($clasificacion);
            $em->flush();
            
            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clasificaciones/crear.html.twig",
        //     array()
        // );
    }
    
    /**
     * PUT
     * @Route("/clasificaciones/{id}", name="clasificaciones_actualizar")
     */
    public function actualizarAction(Request $request, int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_clasificacion = $request->get("source");
            $clasificacion = $em->getRepository("AppBundle:Usuarios")->find($id);
            
            if (!$clasificacion)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $clasificacion->setDescripcion($p_clasificacion->descripcion);
            $clasificacion->setUpdatedat(new DateTime("now"));
            $em->persist($clasificacion);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clasificaciones/actualizar.html.twig", 
        //     array()
        // );
    }
    
    /**
     * DELETE
     * @Route("/clasificaciones/{id}", name="clasificaciones_eliminar")
     */
    public function eliminarAction(int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $clasificacion = $em->getRepository("AppBundle:Clasificaciones")->find($id);
            
            if (!$clasificacion)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }
            
            $em->remove($clasificacion);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "clasificaciones/eliminar.html.twig",
        //     array()
        // );
    }
}