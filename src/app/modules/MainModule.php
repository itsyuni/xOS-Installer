<?php
namespace app\modules;

use httpclient;
use std, gui, framework, app;


class MainModule extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
       
        if ($this->form("CopyRU")->progressBar->progress == 100) {
        
         $e->sender->enable = 0;
 $e->sender->enabled = 0;
         $this->loadForm('Form2'); // тут код действия или ниже если нужно сообщение

        } else {

        $this->form("CopyRU")->progressBar->progress = $this->form("CopyRU")->progressBar->progress + 1 ;

        }        
    }
    
function doDownloaderErrorOne(ScriptEvent $event = null) 
{ 
$message = $event->error ?: 'Неизвестная ошибка'; 

/** @var HttpResponse $response */ 
$response = $event->response; 

if ($response->isNotFound()) { 
$message = 'Файл не найден'; 
} else if ($response->isAccessDenied()) { 
$message = 'Доступ запрещен'; 
} else if ($response->isServerError()) { 
$message = 'Сервер недоступен'; 
} 

UXDialog::showAndWait('Ошибка загрузки файла: ' . $message, 'ERROR'); 
} 

/** 
* @event downloader.done 
*/ 
function doDownloaderDone(ScriptEvent $e = null) 
{ 
$t = $this; 

 
}





}
