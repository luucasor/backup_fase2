<?php

class Vehicle_Model extends PearDatabase {

    private $id;
    private $idReference;
    private $tpReference;
    private $type;
    private $model;
    private $carPlate;
    private $year;

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public function getVehicles(Vtiger_Request $request) {
        $idReference = $request->get('record');
        $module = $request->get('module');

        return $this->getVehiclesBy($idReference, $module);
    }

    public function getVehiclesBy($idReference, $module) {
        global $adb;

        $sql = "SELECT id, id_reference, tp_reference ,type, model, car_plate, year
              FROM vtiger_vehicles_custom WHERE id_reference = ? AND tp_reference = ? ORDER BY type";

        $vehicles = array();
        $result = $adb->pquery($sql, array($idReference, $module));

        if ($adb->num_rows($result)) {
            while (!$result->EOF) {
                $vehicle = new Vehicle_Model();

                $vehicle->setId($result->fields['id']);
                $vehicle->setIdReference($result->fields['id_reference']);
                $vehicle->setTpReference($result->fields['tp_reference']);
                $vehicle->setType($result->fields['type']);
                $vehicle->setModel($result->fields['model']);
                $vehicle->setCarPlate($result->fields['car_plate']);
                $vehicle->setYear($result->fields['year']);

                array_push($vehicles, $vehicle);
                $result->MoveNext();
            }
        }
        return $vehicles;
    }

    public static function insertVehicles(Vtiger_Request $request) {
        $idReference = $request->get('record');
        $vehicles = $request->get('vehicles');
        $module = $request->get('module');

        Vehicle_Model::getInstance()->insertArray($vehicles, $idReference, $module);
    }

    public function delete($idReference, $module) {
      $this->deleteOldRecord($idReference, $module);
    }

    private function insertArray($vehicles, $idReference, $module) {
        $result = FALSE;
        if($this->deleteOldRecord($idReference, $module)){
            foreach($vehicles as $index => $value){
                $vehicle = Vehicle_Model::getInstance();

                $vehicle->setIdReference($idReference);
                $vehicle->setTpReference($module);
                $vehicle->setType($vehicles[$index]['type']);
                $vehicle->setModel($vehicles[$index]['model']);
                $vehicle->setCarPlate($vehicles[$index]['car_plate']);
                $vehicle->setYear($vehicles[$index]['year']);

                $result = $this->insert($vehicle);
            }
        }
        return $result;
    }

    private function deleteOldRecord($idReference, $module) {
        global $adb;
        $sql = "DELETE FROM vtiger_vehicles_custom WHERE id_reference = ? AND tp_reference = ?";
        $adb->pquery($sql, array($idReference, $module));
        return true;
    }


    private function insert(Vehicle_Model $vehicle) {
        $sql = $this->getQueryInsert($vehicle);
        $result = $this->query($sql);

        return $result;
    }

    private function getQueryInsert(Vehicle_Model $vehicle) {

        $idReference = $vehicle->getIdReference();
        $tpReference = $vehicle->getTpReference();
        $type = $vehicle->getType();
        $model = $vehicle->getModel();
        $carPlate = $vehicle->getCarPlate();
        $year = $vehicle->getYear();
        
        if(empty($year))
            $year = "null";

        $sql = "INSERT INTO vtiger_vehicles_custom (id_reference, tp_reference, type, model, car_plate, year)
                VALUES ({$idReference},'{$tpReference}','{$type}','{$model}','{$carPlate}', {$year})";
        return $sql;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdReference() {
        return $this->idReference;
    }

    public function setIdReference($idReference) {
        $this->idReference = $idReference;
    }

    public function getTpReference() {
        return $this->tpReference;
    }

    public function setTpReference($tpReference) {
        $this->tpReference = $tpReference;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getCarPlate() {
        return $this->carPlate;
    }

    public function setCarPlate($carPlate) {
        $this->carPlate = $carPlate;
    }
    
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

}
