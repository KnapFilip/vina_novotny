<?php
session_start();

/**
 * Vrací pole údajů přihlášeného uživatele ze session,
 * nebo null, pokud nikdo není přihlášený.
 *
 * @return array|null
 */
function getLoggedInUser(): ?array {
    if (!empty($_SESSION['logged_in']) && isset($_SESSION['user_id'])) {
        return [
            'user_id' => (int)$_SESSION['user_id'],
            'name' => $_SESSION['name'] ?? '',
            'surname' => $_SESSION['surname'] ?? '',
            'email' => $_SESSION['email'] ?? '',
            'role_id' => (int)($_SESSION['role_id'] ?? 1)
        ];
    }
    return null;
}
