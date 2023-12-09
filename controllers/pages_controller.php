<?php
// controller/pages_controller.php

require_once('controllers/base_controller.php');
require_once('models/getPrinter.php');

class PagesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        $pageName = array('pageName' => ['home']);
        $this->render('home', $pageName);
    }

    public function managePrinters()
    {
        $pageName = array('pageName' => ['manage printers']);
        $this->render('managePrinters', $pageName);
    }

    public function manageCurrentPrinters()
    {
        $printerList = null;
        //search scenario
        if (isset($_POST['searchPrinter'])) {
            $printerList = Printer::searchPrinter($_POST['printerInfo']);
        }
        //

        //Filter scenario
        else if (isset($_POST['filter'])) {
            $brand = $_POST['brand'];
            $campus = $_POST['campus'];
            $building = $_POST['building'];
            $room = $_POST['room'];

            $printerList = Printer::filterPrinter($brand, $campus, $building, $room);
        }

        //Delete scenario
        else if (isset($_POST['deletePrinter'])) {
            Printer::deletePrinter($_POST['printerID']);

            $printerList = Printer::getPrinterList();
        }
        //

        //else 
        else {
            $printerList = Printer::getPrinterList();
        }
        //

        $brandList = Brand::getBrandList();

        $campusList = Campus::getCampusList();
        $buildingList = Building::getBuildingList();
        $roomList = Room::getRoomList();

        $data = array(
            'printerList' => $printerList,
            'brandList' => $brandList,
            'campusList' => $campusList,
            'buildingList' => $buildingList,
            'roomList' => $roomList
        );
        $this->render('manageCurrentPrinters', $data);
    }

    public function viewAndEdit()
    {
        if (isset($_POST['save'])) {
            $update = Printer::updatePrinter($_POST['printerID'], $_POST['brand'], $_POST['printerModel'], $_POST['campus'], $_POST['building'], $_POST['room'], $_POST['isEnabled'], $_POST['Description_D']);
        }


        $printer = Printer::getPrinterInfo($_GET['printerID']);
        $brandList = Brand::getBrandList();

        $campusList = Campus::getCampusList();
        $buildingList = Building::getBuildingList();
        $roomList = Room::getRoomList();


        $data = array(
            'printer' => $printer,
            'brandList' => $brandList,
            'campusList' => $campusList,
            'buildingList' => $buildingList,
            'roomList' => $roomList

        );
        $this->render('viewAndEdit', $data);
    }

    public function addNewPrinter()
    {
        // if (isset($_POST['add'])) {
        //     $update = Printer::updatePrinter();
        // }
        $checkExist = 0;

        if (isset($_POST['addNewPrinter'])) {

            $checkExist = Printer::checkPrinterExist($_POST['printerID']);
            if (!$checkExist) {
                Printer::addNewPrinter($_POST['printerID'], $_POST['brand'], $_POST['printerModel'], $_POST['campus'], $_POST['building'], $_POST['room'], $_POST['isEnabled'], $_POST['Description_D']);
            } else {
                echo "<script> alert('printer is exist !')</script>";
            }
        }

        $brandList = Brand::getBrandList();

        $campusList = Campus::getCampusList();
        $buildingList = Building::getBuildingList();
        $roomList = Room::getRoomList();

        $data = array(
            'brandList' => $brandList,
            'campusList' => $campusList,
            'buildingList' => $buildingList,
            'roomList' => $roomList,
        );

        $this->render('addNewPrinter', $data);
    }

    public function error()
    {
        $this->render('error');
    }
}