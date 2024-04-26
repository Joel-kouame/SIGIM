<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotificationModel;

class Notification extends BaseController
{
    
    public function index()
    {
        $notificationModel = new NotificationModel();
        $data['notifications'] = $notificationModel->getNotifications(1); // 1 est l'id de l'utilisateur
        return view('notification_view', $data);
    }

    public function markAsRead($notificationId)
    {
        $notificationModel = new NotificationModel();
        $notificationModel->markAsRead($notificationId);
        return $this->response->setJSON(['success' => true]);
    }

    public function deleteNotification($notificationId)
    {
        $notificationModel = new NotificationModel();
        $notificationModel->deleteNotification($notificationId);
        return $this->response->setJSON(['success' => true]);
    }
}
