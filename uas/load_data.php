<?php 
class process {

    protected $conn;
    function __construct($conn){
        $this->db = $conn;
    }

    function load_data($tabel){
        $row = $this->db->prepare("SELECT * FROM $tabel");
        $row->execute();
        return $result = $row->fetchAll();
    }
    function load_CountryByCode($tabel,$code){
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE Code = ?");
        $row->execute(array($code));
        return $result = $row->fetchAll();
    }
    function load_CityByID($tabel,$id){
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE ID = ?");
        $row->execute(array($id));
        return $result = $row->fetch();
    }
    function load_dataByCode($tabel,$code){
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE CountryCode = ?");
        $row->execute(array($code));
        return $result = $row->fetchAll();
    }
    function add_dataCity($tabel,$data)
    {
        $rowsSQL = array();
        $toBind = array();
        $columnNames = array_keys($data[0]);

        foreach($data as $arrayIndex => $row){
            $params = array();
            foreach($row as $columnName => $columnValue){
                $param = ":" . $columnName . $arrayIndex;
                $params[] = $param;
                $toBind[$param] = $columnValue;
            }
            $rowsSQL[] = "(" . implode(", ", $params) . ")";
        }
        $sql = "INSERT INTO $tabel (" . implode(", ", $columnNames) . ") VALUES " . implode(", ", $rowsSQL);
        $row = $this->db->prepare($sql);
        
        foreach($toBind as $param => $val){
            $row ->bindValue($param, $val);
        }
        
        return $row ->execute();
    }
    function edit_dataCity($tabel,$data,$id)
    {
        $setPart = array();
        foreach ($data as $key => $value)
        {
            $setPart[] = $key."=:".$key;
            // $bindings[":{$key}"] = $value;
        }
        // $bindings[":id"] = $id;
        $sql = "UPDATE $tabel SET ".implode(', ', $setPart)." WHERE ID = ?";
        $row = $this->db->prepare($sql);
        // $row ->bindValue(':id',$id); 
        // foreach($data as $param => $val)
        // {
        //     $row ->bindValue($param, $val);
        // }
        return $row ->execute(array($id));
    }
    function delete_City($tabel,$id)
    {
        $sql = "DELETE FROM $tabel WHERE ID = ?";
        $row = $this->db->prepare($sql);
        return $row ->execute(array($id));
    }


}