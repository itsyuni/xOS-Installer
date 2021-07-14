<?php
namespace app\forms;

use std, gui, framework, app;


class copyRU extends AbstractForm
{


    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
       $this->downloader->start();  
    }

    /**
     * @event progressBar.construct 
     */
    function doProgressBarConstruct(UXEvent $e = null)
    {    
        
    }





}
