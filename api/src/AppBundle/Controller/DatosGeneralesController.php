<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Datosgenerales;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class DatosGeneralesController extends Controller
{
    /**
     * GET
     * @Route("/datosgenerales/{id}", name="datosgenerales_detalle")
     */
    public function detalleAction(int $id)
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $datosgenerales = $em->getRepository("AppBundle:Datosgenerales")->find($id);

            if (!$datosgenerales)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($datosgenerales, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "datosgenerales/detalle.html.twig", 
        //     array("datosgenerales" => $datosgenerales)
        // );
    }
    
    /**
     * GET
     * @Route("/datosgenerales/", name="datosgenerales_todos")
     */
    public function todosAction()
    {
        try
        {    
            $em = $this->getDoctrine()->getManager();
            $datosgenerales = $em->getRepository("AppBundle:Datosgenerales")->findAll();

            $s_conversion = $this->get("servicio.conversion");
            $json = $s_conversion->jsonEncode($datosgenerales, "json");
            
            return new Response($json, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "datosgenerales/index.html.twig",
        //     array("datosgenerales" => $datosgenerales)
        // );
    }
    
    /**
     * POST
     * @Route("/datosgenerales/", name="datosgenerales_crear")
     */
    public function crearAction(Request $request)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_datosgenerales = json_decode($request->get("source"));
            $datosgenerales = new Datosgenerales();

            $cliente = $em->getRepository("AppBundle:Clientes")->find($p_datosgenerales->cliente->id);
            $datosgenerales->setIdcliente($cliente);
            $datosgenerales->setCotitular($p_datosgenerales->cotitular);
            $datosgenerales->setCapital($p_datosgenerales->capital);
            $datosgenerales->setTasa($p_datosgenerales->tasa);
            $datosgenerales->setInteres($p_datosgenerales->interes);
            $datosgenerales->setDescripcion($p_datosgenerales->descripcion);
            $datosgenerales->setCaracteristicas($p_datosgenerales->caracteristicas);
            $datosgenerales->setEstado($p_datosgenerales->estado);
            $datosgenerales->setObservacion($p_datosgenerales->observacion);
            $datosgenerales->setCreatedat(new DateTime("now"));
            $em->persist($datosgenerales);
            $em->flush();
            
            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "datosgenerales/crear.html.twig",
        //     array()
        // );
    }
    
    /**
     * PUT
     * @Route("/datosgenerales/{id}", name="datosgenerales_actualizar")
     */
    public function actualizarAction(Request $request, int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $p_datosgenerales = $request->get("source");
            $datosgenerales = $em->getRepository("AppBundle:Usuarios")->find($id);
            
            if (!$datosgenerales)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }

            $cliente = $em->getRepository("AppBundle:Clientes")->find($p_datosgenerales->cliente->id);
            $datosgenerales->setIdcliente($cliente);
            $datosgenerales->setCotitular($p_datosgenerales->cotitular);
            $datosgenerales->setCapital($p_datosgenerales->capital);
            $datosgenerales->setTasa($p_datosgenerales->tasa);
            $datosgenerales->setInteres($p_datosgenerales->interes);
            $datosgenerales->setDescripcion($p_datosgenerales->descripcion);
            $datosgenerales->setCaracteristicas($p_datosgenerales->caracteristicas);
            $datosgenerales->setEstado($p_datosgenerales->estado);
            $datosgenerales->setObservacion($p_datosgenerales->observacion);
            $datosgenerales->setUpdatedat(new DateTime("now"));
            $em->persist($datosgenerales);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "datosgenerales/actualizar.html.twig", 
        //     array()
        // );
    }
    
    /**
     * DELETE
     * @Route("/datosgenerales/{id}", name="datosgenerales_eliminar")
     */
    public function eliminarAction(int $id)
    {
        try
        {
            $em = $this->getDoctrine()->getManager();
            $datosgenerales = $em->getRepository("AppBundle:Datosgenerales")->find($id);
            
            if (!$datosgenerales)
            {
                return new Response("Indefinido", 404, array("Content-Type" => "application/json"));
            }
            
            $em->remove($datosgenerales);
            $em->flush();

            return new Response(null, 200, array("Content-Type" => "application/json"));
        }
        catch(Exception $ex)
        {
            return new Response($ex->getMessage(), 500, array("Content-Type" => "application/json"));
        }
        // return $this->render(
        //     "datosgenerales/eliminar.html.twig",
        //     array()
        // );
    }
}