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
class InvoiceIssued {
/* Listamos Historias Médicas asociadas a la clínica **********************************************************/
	private $invoiceServiceList;
	public function getInvoiceServiceList() { return $this->invoiceServiceList; }
	public function addInvoiceServiceList(\BackendBundle\Entity\InvoiceService $medicalHistoryList) { $this->invoiceServiceList[] = $invoiceServiceList; return $this; } 
	public function removeInvoiceServiceList(\BackendBundle\Entity\InvoiceService $medicalHistoryList) { $this->invoiceServiceList->removeElement($invoiceServiceList); }	
/* Id de la Tabla *********************************************************************************************/
    private $id;
    public function getId() { return $this->id; }
/**************************************************************************************************************/
/* invoiceNumber **********************************************************************************************/
	private $invoiceNumber;
	public function setInvoiceNumber($invoiceNumber) { $this->invoiceNumber = $invoiceNumber; return $this; }
	public function getInvoiceNumber() { return $this->invoiceNumber; }
/**************************************************************************************************************/
/* note *******************************************************************************************************/
	private $note;
	public function setNote($note) { $this->note = $note; return $this; }
	public function getNote() { return $this->note; }
/**************************************************************************************************************/
/* registrationDate *******************************************************************************************/
	private $registrationDate;
	public function setRegistrationDate($registrationDate) { $this->registrationDate = $registrationDate; return $this; }
	public function getRegistrationDate() { return $this->registrationDate; }
/**************************************************************************************************************/
/* user *******************************************************************************************************/
	private $user;
	public function setUser(\BackendBundle\Entity\User $user = null) { $this->user = $user; return $this; }
	public function getUser() { return $this->user; }
/**************************************************************************************************************/
/* medicalHistory *********************************************************************************************/
	private $medicalHistory;
	public function setMedicalHistory(\BackendBundle\Entity\MedicalHistory $medicalHistory = null) { $this->medicalHistory = $medicalHistory; return $this; }
	public function getMedicalHistory() { return $this->medicalHistory; }
/**************************************************************************************************************/
/* clinic *****************************************************************************************************/
	private $clinic;
    public function setClinic(\BackendBundle\Entity\Clinic $name = null) { $this->clinic = $name; return $this; }
    public function getClinic() { return $this->clinic; }
/**************************************************************************************************************/
/* business ***************************************************************************************************/
	private $business;
	public function setBusiness(\BackendBundle\Entity\Business $business = null) { $this->business = $business; return $this; }
	public function getBusiness() { return $this->business; }
/**************************************************************************************************************/
/* typeTaxInvoice *********************************************************************************************/
	private $typeTaxInvoice;
	public function setTypeTaxInvoice(\BackendBundle\Entity\TypeTaxInvoice $typeTaxInvoice = null) { $this->typeTaxInvoice = $typeTaxInvoice; return $this; }
	public function getTypeTaxInvoice() { return $this->typeTaxInvoice; }
/**************************************************************************************************************/
}

