<?php namespace DAO;

    use Models\Property as Property;

    interface IPropertyDAO {

        function Add(Property $property);
        function GetAll();
        
    }

?>