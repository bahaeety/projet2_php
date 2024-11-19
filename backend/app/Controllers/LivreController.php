<?php
require_once  __DIR__ . '/../../config/Headers.php';
require_once  __DIR__ . '/../Models/livreModel.php';

class LivreController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function handleRequest($action) {
        $livreModel = new Livre($this->db); 

        switch ($action) {
            case 'getAllLivres':
                $livres = $livreModel->getAllLivres();
                echo json_encode($livres);
                break;

            case 'getLivreById':
                if (isset($_GET['id'])) {
                    $livre = $livreModel->getLivreById($_GET['id']);
                    echo json_encode($livre);
                } else {
                    echo json_encode(['error' => 'ID not provided']);
                }
                break;

            case 'addLivre':
                if (isset($_POST['nom'], $_POST['description'], $_POST['sourceImg'], $_POST['typeLivre'], $_POST['prix'])) {
                    $result = $livreModel->addLivre($_POST['nom'], $_POST['description'], $_POST['sourceImg'], $_POST['typeLivre'], $_POST['prix']);
                    echo json_encode(['success' => $result]);
                } else {
                    echo json_encode(['error' => 'Missing parameters']);
                }
                break;

            case 'deleteLivre':
                if (isset($_GET['id'])) {
                    $result = $livreModel->deleteLivre($_GET['id']);
                    echo json_encode(['success' => $result]);
                } else {
                    echo json_encode(['error' => 'ID not provided']);
                }
                break;

            default:
                echo json_encode(['error' => 'Invalid action']);
                break;
        }
    }
}

require_once  __DIR__ . '/../CLasses/Database.php';

$db = Database::getConnection(); 
if (isset($_GET['action'])) {
    $controller = new LivreController($db);
    $controller->handleRequest($_GET['action']);
}
