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
        $printerList = Printer::getPrinterList();
        $data = array(
            'printerList' => $printerList,
            'pageName' => ['manage current printers']
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
        if (isset($_POST['add'])) {
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

        $this->render('addNewPrinter');
    }

    public function error()
    {
        $this->render('error');
    }
}
