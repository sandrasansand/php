<?php 
class Cliente{
    private $dni;
    private $nombre;
    private $direccion;
    private $localidad;
    private $provincia;
    private $telefono;
    private $email;

//  private $clientes;



    public function __construct($dni, $nombre, $direccion, $localidad, $provincia, $telefono, $email)
    {
     $this->dni = $dni;
     $this->nombre = $nombre;
     $this->direccion = $direccion;
     $this->localidad = $localidad;
     $this->provincia = $provincia;
     $this->telefono = $telefono;
     $this->email = $email;
    // $this->clientes = array();
    }
    public function getDni(){
        return $this->dni;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getLocalidad(){
        return $this->localidad;
    }
    public function getProvincia(){
        return $this->provincia;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getEmail(){
        return $this->email;
    }

    /**
     * @param mixed $dni
     *
     * @return self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }
 /**
     * @param mixed $nombre
     *
     * @return self
     */
 public function setNombre($nombre)
 {
    $this->nombre = $nombre;

    return $this;
 }
 
    /**
     * @param mixed $direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * @param mixed $localidad
     *
     * @return self
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * @param mixed $provincia
     *
     * @return self
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * @param mixed $telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param mixed $clientes
     *
     * @return self
     */
    public function setClientes($clientes)
    {
        $this->clientes = $clientes;

        return $this;
    }
    public function __toString(){
        return "<table><tr>\tDni: {$this->dni},\n \tNombre: {$this->nombre},\n \tDireccion : {$this->direccion},\n \tLocalidad : {$this->localidad},\n \tProvincia: {$this->provincia},\n\tTeléfono: {$this->telefono},\n \tEmail: {$this->email}\n</tr></table>";

    }

    public function imprimirDatos(){
        return $this->dni. ''.$this->nombre.''.$this->direccion.''.$this->localidad.''.$this->provincia.''.$this->telefono.''.$this->email;
    }


    //devuelva una array 
    public function addCliente($cliente)
    {
        $this->clientes[]=$clientes;
    }
    public function mostrarClientes(){
        foreach ($this->clientes as $cliente){
            echo $cliente;
        }

    }

}

//crear una array de clientes mirar video ua
$cliente1=new Cliente();
$cliente1->setDni('74004509M');
$cliente1->setNombre('Alfredo Gómez');
$cliente1->setDireccion('C/Avenida Gran Vía');
$cliente1->setLocalidad('Elche');
$cliente1->setProvincia('Elche');
$cliente1->setTelefono('654456123');
$cliente1->setEmail('gomez@gmail.com');

//addCliente($cliente1);

//var_dump($cliente1);

//prueba clase Cliente 
try {
    $con=new PDO('mysql:host=localhost;dbname=clientes_db','jefe','jefe');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt=$con->prepare('select * from clientes');
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS,'Cliente');
    while ($cliente = $stmt->fetch()) {
        
        echo $cliente;
        //var_dump($cliente);
    }
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
    


}
?>