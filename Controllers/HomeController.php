<?php

// Home controller class
class HomeController {

    public function accueil($params) {
        $users = User::all();
        $view = new PublicView("accueil");
        $view->render([
            "users" => $users
        ]);
    }

    public function addUser($params) {
        User::create($params);
        Router::redirect("accueil");
    }

    public function dashboard($params) {
        $view = new View("dashboard");
        $view->render();
    }

    public function users($params) {
        $view = new View("users");
        $view->render();
    }

    public function offres($params) {
        $view = new PublicView("offres");
        $view->render();
    }

    public function offre($params) {
        // on fera la récupération de l'offre en question à ce niveau

        
        $view = new PublicView("offre");
        $view->render([
            "id" => $params["id"],
        ]);
    }

    public function entreprises($params) {
        $view = new PublicView("entreprises");
        $view->render();
    }

}