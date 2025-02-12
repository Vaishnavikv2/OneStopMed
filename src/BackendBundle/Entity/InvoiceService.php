<?php
/* Namespace **************************************************************************************************/
    namespace BackendBundle\Entity;
/* Añadimos el VALIDADOR **************************************************************************************/
/*
 * Definimos el sistema de validación de los datos en las entidades dentro de "app\config\config.yml"
 * y la gestionamos en "src\AppBundle\Resources\config\validation.yml",
 * cada entidad deberá llamar a "use Symfony\Component\Validator\Constraints as Assert;"
 * VER src\BackendBundle\Entity\User.php
 */
    use Symfony\Component\Validator\Constraints as Assert;
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\Common\Collections\Collection;
/**************************************************************************************************************/
class InvoiceService {
/* Id de la Tabla *********************************************************************************************/
    private $id;
    public function getId() { return $this->id; }
/**************************************************************************************************************/
/* description ************************************************************************************************/
	private $description;
	public function setDescription($description) { $this->description = $description; return $this; }
	public function getDescription() { return $this->description; }
/**************************************************************************************************************/
/* price ******************************************************************************************************/
	private $price;
	public function setPrice($price) { $this->price = $price; return $this; }
	public function getPrice() { return $this->price; }
/**************************************************************************************************************/
/* typeTaxService *********************************************************************************************/
	private $typeTaxService; 
	public function setTypeTaxService(\BackendBundle\Entity\typeTaxService $typeTaxService = null) { $this->typeTaxService = $typeTaxService; return $this; } 
	public function getTypeTaxService() { return $this->typeTaxService; } 	
/**************************************************************************************************************/
/* invoice ****************************************************************************************************/
	private $invoiceIssued;
	public function setInvoiceIssued(\BackendBundle\Entity\InvoiceIssued $invoiceIssued = null) { $this->invoiceIssued = $invoiceIssued; return $this; }
	public function getInvoiceIssued() { return $this->invoiceIssued; }
/**************************************************************************************************************/
/* tracingService *********************************************************************************************/
	private $tracingService;
	public function setTracingService(\BackendBundle\Entity\TracingService $tracingService = null) { $this->tracingService = $tracingService; return $this; }
	public function getTracingService() { return $this->tracingService; }
/**************************************************************************************************************/
}

