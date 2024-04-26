<?php namespace App\Helpers;

function getStatusLabel($status) {
    switch ($status) {
        case 0:
            return '<span class="badge badge-soft-primary">En attente</span>';
        case 1:
            return '<span class="badge badge-soft-success">Validé</span>';
        case 2:
            return '<span class="badge badge-soft-danger">Annulé</span>';
        default:
            return '<span class="badge badge-soft-secondary">Statut inconnu</span>';
    }
}
