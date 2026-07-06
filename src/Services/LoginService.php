<?php

namespace Diginamic\Framework\Services;

class LoginService
{
    /**
     * Bouton à afficher selon le status de l'utilisateur
     *
     * @return String $status
     */
    public function connection()
    {
        // Utilisateur authentifié 
        $isAuthenticated = isset($_SESSION['user_authenticated']) && $_SESSION['user_authenticated'];
        $isAdmin = isset($_SESSION['user_admin']) && $_SESSION['user_admin'];

            if ($isAuthenticated && $isAdmin) {
                $status = "admin";
            }
            else if ($isAuthenticated && !$isAdmin) {
                $status = "user";
            }
            else {
                $status = "ano";
            }
        return $status;
    }
}
